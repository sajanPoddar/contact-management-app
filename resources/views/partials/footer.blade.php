   <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
    $("#add-new-group").hide();
    $('#add-group-btn').click(function () {      
      $("#add-new-group").slideToggle(function() {
        $('#new_group').focus();
      });
      return false;
    });
    </script>
  </body>
</html>