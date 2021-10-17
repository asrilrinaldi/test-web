 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url()  ?>/assets/js/jquery-3.6.0.min.js"></script>
 <script src="<?= base_url()  ?>/assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url()  ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url()  ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url()  ?>/assets/js/sb-admin-2.min.js"></script>
 <script>
     $(document).on('click', '#btn-hapus', function() {
         $('.modal-hapus #id').val($(this).data('id'));
     })
 </script>
 <script>
     $(document).on('click', '#btn-edit', function() {
         $('.modal-edit #id').val($(this).data('id'));
         $('.modal-edit #nama').val($(this).data('nama'));
         $('.modal-edit #password').val($(this).data('password'));
         $('.modal-edit #level').val($(this).data('level'));
     })
 </script>
 <script>
     $(document).on('click', '#btn-logout', function() {
         $('.modal-logout #id').val($(this).data('id'));
     })
 </script>

 </body>

 </html>