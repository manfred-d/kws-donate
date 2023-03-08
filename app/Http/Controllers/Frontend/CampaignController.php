<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCampaignRequest;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Models\Campaign;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CampaignController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('campaign_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $campaigns = Campaign::all();

        return view('frontend.campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        abort_if(Gate::denies('campaign_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.campaigns.create');
    }

    public function store(StoreCampaignRequest $request)
    {
        $campaign = Campaign::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $campaign->id]);
        }

        return redirect()->route('frontend.campaigns.index');
    }

    public function edit(Campaign $campaign)
    {
        abort_if(Gate::denies('campaign_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.campaigns.edit', compact('campaign'));
    }

    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        $campaign->update($request->all());

        return redirect()->route('frontend.campaigns.index');
    }

    public function show(Campaign $campaign)
    {
        abort_if(Gate::denies('campaign_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.campaigns.show', compact('campaign'));
    }

    public function destroy(Campaign $campaign)
    {
        abort_if(Gate::denies('campaign_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $campaign->delete();

        return back();
    }

    public function massDestroy(MassDestroyCampaignRequest $request)
    {
        Campaign::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('campaign_create') && Gate::denies('campaign_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Campaign();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
