<div class="form-group">
    <div class="clearfix">
        {!! Form::formLabel($title)  !!}
        <div class="{{ $attributes["data-table"] or '' }} {{ $name }} file-input-box" style="">

            <p class="file-label small" style="">Upload {{ $name }} : <span class="file-upload-name"></span></p>
            <input type="file" name="{{ $name }}" id="{{ $name }}" class="file-upload" style=""/>
        </div>
        {!! Form::formError($name, $errors) !!}
    </div>
</div>

@push('styles')
<style>
    .file-input-box {
        position: relative;
        min-height: 20px;
        padding: 10px;
        background-color: lightgray;

    }

    .file-label {
        display: block;
        height: 100%;
        height: inherit;
        margin: 0;
    }

    .file-input-box [type=file] {
        min-height: 20px;
        float: left;
        opacity: 0;
        position: absolute;
        top: 0;
        bottom: 0;

    }
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function () {
        $(".file-upload").each(function () {
            var file = $(this);

            $(file).change(function (e) {
                var upload_file = $(file).val();
                var file_name = upload_file.replace("C:\\fakepath\\", '');
                console.log("changed" + ' ' + upload_file + ' ' + file_name);
                $(".file-upload-name").html(file_name);
            });

        });
    });
</script>
@endpush