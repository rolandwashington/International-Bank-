var $ = jQuery;

// PASSPORT SIZE IMAGE 
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ib-display-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#ib-input-image").change(function () {
    readURL(this);
});


// PASSPORT SIZE IMAGE 
function readIDCard(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#ib-display-id').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#id-card").change(function () {
    readIDCard(this);
});


$('input[type=radio][name=marital-status]').change(function () {
    if (this.value == 'Married') {
        $(document).find(".spouse-name").show();
    } else {
        $(document).find(".spouse-name").hide();
    }
});

$(document).ready(function () {
    if ($("input[name='is-account-with-ib']:checked")) {
        $(document).find(".is-account").css(
            {
                "display": "flex",
                "flex-direction": "column"
            }
        );
    }
});

$('input[type=radio][name=is-account-with-ib]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".is-account").css(
            {
                "display": "flex",
                "flex-direction": "column"
            }
        );

        $(document).find(".btn-account").hide();
    } else {
        $(document).find(".is-account").hide();
        if (window.location.href.indexOf("account-application") > -1) {
            // Do nothing!
        } else {
            $(document).find(".application-form").append('<a class="btn btn-account" href="/account-application.php">GET AN ACCOUNT</a>')
        }
    }
});

$('input[type=radio][name=is-employed]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".employer-details").show();
    } else {
        $(document).find(".employer-details").hide();
    }
});


$('input[type=radio][name=is-government-official]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".government-official-position").show();
    } else {
        $(document).find(".government-official-position").hide();
    }
});

$('input[type=radio][name=is-government-official-relative]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".official-info").show();
    } else {
        $(document).find(".official-info").hide();
    }
});

$('input[type=radio][name=is-minor]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".minor").show();
    } else {
        $(document).find(".minor").hide();
    }
});


$('input[type=radio][name=is-additional-services]').change(function () {
    if (this.value == 'Yes') {
        $(document).find(".additional-services").show();
    } else {
        $(document).find(".additional-services").hide();
    }
});




$('#job-location').on('change', function () {
    if (this.value == "Remote") {
        $(this).parents(".add-job-form").find(".job-location").hide();
    } else {
        $(this).parents(".add-job-form").find(".job-location").show();
    }
});


$('#nationality').on('change', function () {
    if (this.value == "Liberia") {
        $(this).parents(".application-form").find(".other-nationality").hide();
    } else {
        $(this).parents(".application-form").find(".other-nationality").show();
    }
});



function hideAccountSettings(params) {
    $(".account-summary, .job-details, .academic-details").hide()
    $(".account-summary-menu, .job-application-menu, .scholarship-application-menu").css({
        "backgroundColor": "transparent",
        "color": "#707070",
        "font-weight": "400"
    })
}

$(".account-summary-menu").on("click", function () {
    hideAccountSettings();
    $(".account-summary").show();
    $(".account-summary-menu").css({
        "backgroundColor": "#C70726",
        "color": "#F2F2F2",
        "font-weight": "600"
    })
})

$(".job-application-menu").on("click", function () {
    hideAccountSettings();
    $(".job-details").show();
    $(".job-application-menu").css({
        "backgroundColor": "#C70726",
        "color": "#F2F2F2",
        "font-weight": "600"
    })
})

$(".scholarship-application-menu").on("click", function () {
    hideAccountSettings();
    $(".academic-details").show();
    $(".scholarship-application-menu").css({
        "backgroundColor": "#C70726",
        "color": "#F2F2F2",
        "font-weight": "600"
    })
})




$("#small-business-get-account").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-small-business-get-an-account").offset().top
    }, 700);
});

$("#small-business-credit").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-small-business-credit-facilities").offset().top
    }, 700);
});

$("#small-business-ebanking").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-e-banking").offset().top
    }, 700);
});

$("#personal-get-account").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-personal-get-an-account").offset().top
    }, 700);
});

$("#ib-personal-account").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-personal-get-an-account").offset().top
    }, 700);
});

$("#personal-credit").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-personal-credit-facilities").offset().top
    }, 700);
});

$("#personal-ebanking").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-e-banking").offset().top
    }, 700);
});


$("#corporate-get-account").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-corporate-get-an-account").offset().top
    }, 700);
});

$("#corporate-credit").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-corporate-credit-facilities").offset().top
    }, 700);
});

$("#corporate-e-banking").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-e-banking").offset().top
    }, 700);
});

$("#small-business-loan").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-small-business-credit-facilities").offset().top
    }, 700);
});


$(".apply-for-service").click(function () {
    $('html, body').animate({
        scrollTop: $("#business-credit-facilities-prerequisites").offset().top
    }, 700);
});

$("#ib-team-nav").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-team").offset().top
    }, 700);
});

$("#ib-community-nav").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-community").offset().top
    }, 700);
});

$("#ib-location-nav").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-location").offset().top
    }, 700);
});

$("#ib-partners-nav").click(function () {
    $('html, body').animate({
        scrollTop: $("#ib-partners").offset().top
    }, 700);
});


// GALLERY JS
$(document).ready(function () {
    var slideIndex = 1;
    var modalImg = $(".modal-img")[0];

    $("#gallery img").click(function () {
        var t = $(this).attr("src");
        slideIndex = $(this).index() + 1;
        modalImg.src = t;
        $("#myModal").modal();
    });

    $("#gallery video").click(function () {
        var v = $("video > source");
        var t = v.attr("src");
        $(".modal-body").html("<video class='model-vid' controls><source src='" + t + "' type='video/mp4'></source></video>");
        $("#myModal").modal();
    });

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = $("img");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        modalImg.src = slides[slideIndex - 1].src;
    }
});//EOF Document.ready
