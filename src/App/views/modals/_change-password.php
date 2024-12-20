<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/settings/change/password" method="POST" id="formChangePassword">
      <?php include $this->resolve("partials/_csrf.php"); ?>
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="changePasswordLabel">Change password</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-1">
            <label for="oldPassword" class="col-form-label">Old password:</label>
            <input type="password" name="oldPassword" class="form-control" id="oldPassword">
          </div>
          <div class="text-danger text-start small" id="oldPasswordError"></div>

          <div class="mt-2 mb-1">
            <label for="newPassword" class="col-form-label">Create new password:</label>
            <input type="password" name="newPassword" class="form-control" id="newPassword">
          </div>
          <div class="text-danger text-start small" id="newPasswordError"></div>

          <div class="mt-2 mb-1">
            <label for="newPasswordConfirmed" class="col-form-label">Confirm new password:</label>
            <input type="password" name="newPasswordConfirmed" class="form-control" id="newPasswordConfirmed">
          </div>
          <div class="text-danger text-start small" id="newPasswordConfirmedError"></div>

        </div>
        <div class="modal-footer mt-1">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  $("#formChangePassword").validate({
    rules: {
      oldPassword: {
        required: true,
        minlength: 6,
      },
      newPassword: {
        required: true,
        minlength: 6,
      },
      newPasswordConfirmed: {
        required: true,
        minlength: 6,
        equalTo: "#newPassword",
      },
    },
    errorPlacement: (error, element) => {
      if (element.attr("name") == "oldPassword") {
        $("#oldPasswordError").text($(error).text());
        $("#oldPassword").addClass("is-invalid");
      } else if (element.attr("name") == "newPassword") {
        $("#newPasswordError").text($(error).text());
        $("#newPassword").addClass("is-invalid");
      } else if (element.attr("name") == "newPasswordConfirmed") {
        $("#newPasswordConfirmedError").text($(error).text());
        $("#newPasswordConfirmed").addClass("is-invalid");
      }
    },
  });

  $("#changePasswordModal").on("hide.bs.modal", () => {
    $("#oldPasswordError").text("");
    $("#oldPassword").removeClass("is-invalid");
    $("#newPasswordError").text("");
    $("#newPassword").removeClass("is-invalid");
    $("#newPasswordConfirmedError").text("");
    $("#newPasswordConfirmed").removeClass("is-invalid");
  });
</script>