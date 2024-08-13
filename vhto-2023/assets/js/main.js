jQuery(function ($) {
    $(".filter-input-aanbod").on("change", function () {
        var filter = $('.filter-input-aanbod');

        var category_targetgroup = [];
        $(".filter-input-aanbod[type=checkbox]:checked").each(function () { category_targetgroup.push(this.id) });

        // voeg de data samen in data
        data = {
            'action': 'filter_vhto_activities',
            'targetgroup': category_targetgroup,
        };

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                $('.filtered-posts').html('Content doorzoeken...');
                $('.filter-input-aanbod').attr("disabled", true);
            },
            success: function (data) {
                $('.filter-input-aanbod').removeAttr("disabled");
                if (data) {
                    console.log(data)
                    $('.filtered-posts').html(data.posts);
                    //$('.filtered-posts').html(data.posts);
                    // $('.filtered-posts').html(data.test);
                } else {
                    $('.filtered-posts').html('Helaas, niks gevonden.');
                }
            }
        });
    });
});

jQuery(function ($) {
    $(".filter-input-kennis").on("change", function () {
        var filter = $('.filter-input-kennis');

        var category_categories = [];
        $(".filter-input-kennis[type=checkbox]:checked").each(function () { category_categories.push(this.id) });

        // voeg de data samen in data
        data = {
            'action': 'filter_vhto_posts',
            'categories': category_categories,
        };

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data: data,
            type: 'POST',
            // beforeSend: function (xhr) {
            //     $('.filtered-posts').html('Content doorzoeken...');
            //     $('.filter-input-kennis').attr("disabled", true);
            // },
            success: function (data) {
                $('.filter-input-kennis').removeAttr("disabled");
                if (data) {
                    console.log(data)
                    $('.filtered-posts').html(data.posts);
                } else {
                    $('.filtered-posts').html('Helaas, niks gevonden.');
                }
            }
        });
    });
});

jQuery(function ($) {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function () {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
});

jQuery(document).ready(function ($) {
    jQuery(document).on('submit', '.captcha-form', function (e) {
        if (grecaptcha.getResponse() == "") {
            e.preventDefault();
            jQuery('.captcha-error').text("Please verify captcha");
        } else {
            jQuery('.captcha-error').text("");
        }
    });
});