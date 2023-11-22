function submitForm() {
    var formData = $("#petForm").serialize();

    $.ajax({
        type: "POST",
        url: "save_pet.php",
        data: formData,
        success: function (response) {
            $("#response").html(response);
            // You can also reset the form here if needed
            // $("#petForm")[0].reset();
        },
        error: function (error) {
            $("#response").html("Error: " + error);
        }
    });
}
