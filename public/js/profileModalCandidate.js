$(document).ready(function () {
    $("body").on("click", "#viewProfileModal", function () {
        var userURL = $(this).data("url");
        $.ajax(userURL, {
            success: function (data, status) {
                console.log(data);
                $('#candidateFirstName').text(data.name);
                $('#candidateMiddleName').text(data.middleName);
                $('#candidateSurName').text(data.surName);
                $('#village').text(data.current_village);
                $('#ward').text(data.current_ward);
                $('#LLG').text(data.current_LLG);
                $('#district').text(data.current_district);
                $('#province').text(data.current_province);
                $('#region').text(data.current_region);
                // $("#product-title").text(data.title);
                // $("#product-price").text(data.price);
                // $("#product-description").text(data.description);
                // $("#product-size").text(data.size);
                $("#candidateImage").attr(
                    "src",
                    "img/uploads/candidate/" + data.displayPicture
                );
                // $("#js-show-modal1").addClass("show-modal1");
            },
        });
    });
});

