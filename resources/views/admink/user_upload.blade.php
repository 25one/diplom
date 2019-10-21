<script>
window.parent.document.getElementById("img_" + "{{$whatimage}}").setAttribute("src", "{{$file}}");
window.parent.document.getElementById("hidden_" + "{{$whatimage}}").setAttribute("value","{{$file}}");
</script>

