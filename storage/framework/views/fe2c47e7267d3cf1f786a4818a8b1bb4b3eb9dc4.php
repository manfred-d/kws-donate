<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.contentPage.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.content-pages.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="title"><?php echo e(trans('cruds.contentPage.fields.title')); ?></label>
                <input class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" type="text" name="title" id="title" value="<?php echo e(old('title', '')); ?>" required>
                <?php if($errors->has('title')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('title')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.title_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="categories"><?php echo e(trans('cruds.contentPage.fields.category')); ?></label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0"><?php echo e(trans('global.deselect_all')); ?></span>
                </div>
                <select class="form-control select2 <?php echo e($errors->has('categories') ? 'is-invalid' : ''); ?>" name="categories[]" id="categories" multiple>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('categories', [])) ? 'selected' : ''); ?>><?php echo e($category); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('categories')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('categories')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.category_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="tags"><?php echo e(trans('cruds.contentPage.fields.tag')); ?></label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0"><?php echo e(trans('global.select_all')); ?></span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0"><?php echo e(trans('global.deselect_all')); ?></span>
                </div>
                <select class="form-control select2 <?php echo e($errors->has('tags') ? 'is-invalid' : ''); ?>" name="tags[]" id="tags" multiple>
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('tags', [])) ? 'selected' : ''); ?>><?php echo e($tag); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('tags')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('tags')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.tag_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="page_text"><?php echo e(trans('cruds.contentPage.fields.page_text')); ?></label>
                <textarea class="form-control ckeditor <?php echo e($errors->has('page_text') ? 'is-invalid' : ''); ?>" name="page_text" id="page_text"><?php echo old('page_text'); ?></textarea>
                <?php if($errors->has('page_text')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('page_text')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.page_text_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="excerpt"><?php echo e(trans('cruds.contentPage.fields.excerpt')); ?></label>
                <textarea class="form-control <?php echo e($errors->has('excerpt') ? 'is-invalid' : ''); ?>" name="excerpt" id="excerpt"><?php echo e(old('excerpt')); ?></textarea>
                <?php if($errors->has('excerpt')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('excerpt')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.excerpt_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="featured_image"><?php echo e(trans('cruds.contentPage.fields.featured_image')); ?></label>
                <div class="needsclick dropzone <?php echo e($errors->has('featured_image') ? 'is-invalid' : ''); ?>" id="featured_image-dropzone">
                </div>
                <?php if($errors->has('featured_image')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('featured_image')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.contentPage.fields.featured_image_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '<?php echo e(route('admin.content-pages.storeCKEditorImages')); ?>', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '<?php echo e($contentPage->id ?? 0); ?>');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.featuredImageDropzone = {
    url: '<?php echo e(route('admin.content-pages.storeMedia')); ?>',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="featured_image"]').remove()
      $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="featured_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($contentPage) && $contentPage->featured_image): ?>
      var file = <?php echo json_encode($contentPage->featured_image); ?>

          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
<?php endif; ?>
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kikosico/public_html/projects/kws-donate/resources/views/admin/contentPages/create.blade.php ENDPATH**/ ?>