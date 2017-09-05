

function showResultList(instructors, current_page, item_per_page, total_elements) {


    $('#instructors-list').html("");

    $('#total').html('We found ' + total_elements + ' instructors');

    if(!total_elements) {
        $('.sorting-content').fadeOut();
        $('#search-button').fadeOut(200);
        $('#pagination').fadeOut(200);
    }
    else {
        $('.sorting-content').fadeIn();
        $('#search-button').fadeIn();
        $('#pagination').fadeIn();
    }
        for (var i = 0; i < instructors.length; i++) {

            var content = '<!-- instructors-->' +

                '<div class="teacher-item-list clearfix">' +
                '<div class="row gap-20">' +
                '<!-- images column -->' +
                '<div class="col-xs-12 col-sm-3 col-md-2">' +
                '<div class="image">' +
                '<img src="assets/image/instructors/' + instructors[i]['photo'] + '" alt="Image" />' +
                '</div>' +
                '<div class="clear"></div>' +
                '<ul class="user-action">' +
                '<li><a href="#" data-toggle="tooltip" data-placement="top" title="Save"><i class="fa fa-heart"></i></a></li>' +
                '<li><a href="#" data-toggle="tooltip" data-placement="top" title="Follow"><i class="fa fa-user-plus"></i></a></li>' +
                '</ul>' +
                '</div>' +

                '<!-- description column -->' +
                '<div class="col-xs-12 col-sm-9 col-md-6">' +
                '<div class="content">' +
                '<div class="rating-wrapper">' +
                '<div class="rating-item">' +
                '<input type="hidden" class="rating" id="input' + i + '"data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-readonly value="' + instructors[i]['rating'] + '"/>' +
                '</div>' +
                '<span> (7 review)</span>' +
                '</div>' +
                '<h3><a href="#">' + instructors[i]['name'] + '</a></h3>' +
                '<p class="labeling">' + instructors[i]['title'] + '</p>' +
                '<p class="short-info">';

            if (instructors[i]['description'].length > 170) {
                content += instructors[i]['description'].substr(0, 175) + '...';
            }
            else
                content += instructors[i]['description'];

            content += '</p>' +

                '<a href="instructor-detail/' + instructors[i]['id_instructor'] + '" class="btn btn-primary btn-inverse btn-sm">Detail</a>' +
                '</div>' +
                '</div>' +

                '<!-- popular courses column -->' +
                '<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-4 col-md-offset-0">' +
                '<div class="content-right">' +
                '<ul class="meta-list">' +
                '<li class="meta-course-count">He has taught <span class="text-danger font700">12 courses</span></li>' +
                '<li><h6>His popular courses</h6></li>' +
                '<li><a href="#">Foundations of Enterprise Development for Windows</a></li>' +
                '<li><a href="#">Introduction to HTML: Build a Portfolio Website</a></li>' +
                '<li><a href="#">Food Photography: Shooting at Restaurants</a></li>' +
                '</ul>' +
                '</div>' +
                '</div>' +

                '</div>' +

                '</div>';


            $('#instructors-list').append(content);

            $("#input" + i).rating();

            $('#instructors-list').fadeIn();

        }

        //pagination
        var pag = $(".pager-innner");
        pag.html("");

        var pagination = '<div class="row">' +
            '<div class="col-xs-12 col-sm-12 col-sm-6">' +
            '<div class="pagination-text">';

        pagination += 'Showing result ' + parseInt((current_page - 1) * item_per_page + 1) + ' to ' + ((parseInt((current_page - 1) * item_per_page + item_per_page) < total_elements) ? parseInt((current_page - 1) * item_per_page + item_per_page) : total_elements) + ' from ' + total_elements + '</div>';

        pagination += '</div>' +

            '<div class="col-xs-12 col-sm-12 col-sm-6">' +
            '<nav class="pager-right">' +
            '<ul class="pagination">';

        //previous
        if (current_page > 1) {
            pagination += '<li>' +
                '<a href="' + (current_page - 1) + '" aria-label="Previous">' +
                '<span aria-hidden="true">&laquo;</span>' +
                '</a>' +
                '</li>';

        }

        //links

        for (var j = 1; j <= total_elements / item_per_page + 1; j++) {


            if ((j == (total_elements / 2)) && (total_elements / item_per_page > 6)) {
                pagination += '<li><span>...</span></li>';

            }


            if (j == current_page)
                pagination += '<li class="active"><a href="' + j + '">' + j + '</a></li>';
            else
                pagination += '<li><a href="' + j + '">' + j + '</a></li>';


        }

        //next
        if (current_page * item_per_page < total_elements) {
            pagination += '<li><a href="' + (parseInt(current_page) + 1) + '" aria-label="Next">' +
                '<span aria-hidden="true">&raquo;</span>' +
                '</a>' +
                '</li>';
        }

        pagination += '</ul>' +
            '</nav>' +
            '</div>' +
            '</div>';

        pag.append(pagination);


}


function loadInstructors(page_number) {

    //filters values
    var order_by_column = $(".sort-by li.active").children('a').text(); //name, location, rating

    var direction = 'asc'; //asc, desc
    if( $(".sort-by li.active").hasClass('up'))
        direction = 'desc';

    var categories;
    $('.checkbox[name=categories]:checked').each(function(){

        categories = $(this).attr('id');

    });

    var subjects;
    $('.checkbox[name=subjects]:checked').each(function(){

        subjects = $(this).attr('id');

    });

    //var page_number = $('.pagination li.active').attr('href'); //active page
    var item_per_page = 6;


    $.ajax({
        type: "POST",
        url: "instructor_controller/get_instructors",
        dataType: 'json',

        data: {
            order_by_column: order_by_column, //name, location, rating
            order_by: direction, //desc, asc
            page_number: page_number,  //1,2,3,4
            item_per_page : item_per_page,
            categories : categories,
            subjects : subjects,


        },

        success: function (results) {

            showResultList(results['instructors'],page_number,item_per_page, results['total_elements']);
        },
        error: function(error){
            console.log('error: ' + error);

        }

    });

}

$(document).one('ready',function(){

    loadInstructors(1);
});

$(document).ready(function () {


    $('.checkbox[name=categories]').on('click', function () {

        loadInstructors(1);

    });

    $('.checkbox[name=subjects]').on('click', function () {

        loadInstructors(1);

    });



    //sorting links
    $(".sort-by li").click(function () {

        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $(this).siblings().find("i").removeClass("fa-long-arrow-down");
        $(this).siblings().find("i").removeClass("fa-long-arrow-up");

        if ($(this).hasClass("up")) {

            $(this).find("i").removeClass("fa-long-arrow-up");
            $(this).find("i").addClass("fa-long-arrow-down");

            $(this).removeClass("up");
            $(this).addClass("down");
        }
        else {

            $(this).find("i").removeClass("fa-long-arrow-down");
            $(this).find("i").addClass("fa-long-arrow-up");

            $(this).removeClass("down");
            $(this).addClass("up");

        }


        loadInstructors(1);
    });

    //pagination links
    $(document).on("click",".pagination li", function(e){
        e.preventDefault();

        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        console.log($(this).children('a').attr('href'));

        loadInstructors($(this).children('a').attr('href'));
    });


    $('.sidebar-reset-filter').click(function(){
        location.reload();
    });




});

