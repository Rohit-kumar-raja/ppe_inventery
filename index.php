<form method="post" enctype="multipart/form-data">
    <input type="file" accept="" onchange="image_check(this,150)" name="imgfile" id="imgfile"><br>
    <input type="submit">
</form>


<script>
    function image_check(element, uploadImageSize) {
        var imgpath = element;
        if (!imgpath.value == "") {
            var img = imgpath.files[0].size;
            var imgsize = Math.round(img / 1024);
            if (imgsize > uploadImageSize) {
                alert("Image size is " + imgsize + " KB please Upload  Image smaller than " + uploadImageSize+" KB");
                element.value = "";
            }
        }
    }
</script>