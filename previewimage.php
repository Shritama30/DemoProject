<script type="text/javascript">

  function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
      };
  };

</script>
