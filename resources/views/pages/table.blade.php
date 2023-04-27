<table id="doctor-table" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Engine version</th>
            <th>CSS grade</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
            <tr id="delete-row-{{ $doctor->id }}">
                <td>
                    <a href="javascript:void(0)" onclick="showAvaibility({{ $doctor->id  }})" style="color:#0c7dee;">
                        {{ $doctor->name }}
                    </a>
                </td>
                <td>
                    {{ $doctor->address }}
                </td>

                <td>
                    <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-button-store delete-book"
                            onclick="return confirm('Are you sure want to delete this Doctor!')"><i
                                class="fa fa-trash"></i></button>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" id="edit-book" class="btn btn-button-store"><i
                                class="fa fa-pencil"></i></a>

                    </form>

                </td>
            </tr>
        @empty
            <tr class="no-data-row">
                <td colspan="4" rowspan="2" align="center">
                    <div class="message">
                        <p>No data available in table</p>
                    </div>

                </td>
            </tr>
        @endforelse
    </tbody>
</table>
    <!-- /.modal-dialog -->

@if ($pagination != 1)
    <nav aria-label="Contacts Page Navigation">
        <ul class="pagination pagination-doctor justify-content-center m-0" id="doctor-pagination">

        </ul>
    </nav>
@endif

<input type="hidden" name="page" id="page-product" value="{{ $page }}">
<input type="hidden" name="paginations" id="paginations-doctor" value="{{ $pagination }}">

<script>

    (function($) {
        function getPageList(totalPagesdoctor, page, maxLength) {
            if (maxLength < 5) throw "maxLength must be at least 5";

            function range(start, end) {
                return Array.from(Array(end - start + 1), (_, i) => i + start);
            }
            var sideWidth = maxLength < 9 ? 1 : 2;
            var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
            var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
            if (totalPagesdoctor <= maxLength) {
                // no breaks in list
                return range(1, totalPagesdoctor);
            }
            if (page <= maxLength - sideWidth - 1 - rightWidth) {
                // no break on left of page
                return range(1, maxLength - sideWidth - 1)
                    .concat([0])
                    .concat(range(totalPagesdoctor - sideWidth + 1, totalPagesdoctor));
            }
            if (page >= totalPagesdoctor - sideWidth - 1 - rightWidth) {
                // no break on right of page
                return range(1, sideWidth)
                    .concat([0])
                    .concat(
                        range(totalPagesdoctor - sideWidth - 1 - rightWidth - leftWidth, totalPagesdoctor)
                    );
            }
            // Breaks on both sides
            return range(1, sideWidth)
                .concat([0])
                .concat(range(page - leftWidth, page + rightWidth))
                .concat([0])
                .concat(range(totalPagesdoctor - sideWidth + 1, totalPagesdoctor));
        }
        $(function() {
            // Number of items and limits the number of items per page
            var numberOfItemsdoctor = $("#paginations-doctor").val();
            var currentPagedoctor = parseInt($('#page-product').val());
            var limitPerPagedoctor = 1;
            var paginationSizedoctor = 7;
            var totalPagesdoctor = Math.ceil(numberOfItemsdoctor / limitPerPagedoctor);
            var nextPagedoctor = parseInt(currentPagedoctor + 1);
            var previousPagedoctor = parseInt(currentPagedoctor - 1);

            function showPage(whichPage) {
                if (whichPage < 1 || whichPage > totalPagesdoctor) return false;
                currentPagedoctor = whichPage;
                // Replace the navigation items (not prev/next):
                $("#doctor-pagination li").slice(1, -1).remove();
                getPageList(totalPagesdoctor, currentPagedoctor, paginationSizedoctor).forEach(item => {
                    // console.log(currentPagedoctor,'currentPagedoctor');
                    // console.log(item,'item');
                    $("<li>")
                        .addClass(
                            "page-item " +
                            (item ? "current-page " : "") +
                            (item === currentPagedoctor ? "active " : "")
                        )
                        .append(
                            $("<a>")
                            .addClass("page-link")
                            .attr({

                                "data-toggle": "pagination-tab",
                                "data-page": item
                            })
                            .text(item || "...")
                            .prop('disabled', (item ? " " : true))
                        )
                        .insertBefore("#next-page-product");
                });
                return true;
            }
            // Include the prev/next buttons:
            $("#doctor-pagination").append(
                $("<li>").addClass("page-item").attr({
                    id: "previous-page-product"
                }).append(
                    $("<a>")
                    .addClass("page-link")
                    .attr({
                        "data-toggle": "pagination-tab",
                        "data-page": ((previousPagedoctor == 0) ? 1 : previousPagedoctor)
                    })
                    .text("Prev")
                ),
                $("<li>").addClass("page-item").attr({
                    id: "next-page-product"
                }).append(
                    $("<a>")
                    .addClass("page-link")
                    .attr({
                        "data-toggle": "pagination-tab",
                        "data-page": ((currentPagedoctor == totalPagesdoctor) ? currentPagedoctor :
                            nextPagedoctor)
                    })
                    .text("Next")
                )
            );
            // Show the page links
            showPage(currentPagedoctor);
            // Use event delegation, as these items are recreated later
            $(
                document
            ).on("click", "#doctor-pagination li.current-page:not(.active)", function() {
                return showPage(+$(this).text());
            });
            $("#next-page-product").on("click", function() {
                return showPage(nextPagedoctor);
            });
            $("#previous-page-product").on("click", function() {
                return showPage(previousPagedoctor);
            });
            $("#doctor-pagination").on("click", function() {
                $("html,body").animate({
                    scrollTop: 0
                }, 0);
            });
            $('a[data-toggle="pagination-tab"]').on('click', async function(e) {
                var activeTab = e.target // activated tab
                // get the category
                var page = $(activeTab).data('page');
                var title = $("#title").val()
                var author = $("#author").val()
                var genre = $("#genre").val()
                var isbn = $("#isbn").val()
                var published = $("#published").val()
                var publisher = $("#publisher").val()
                $("span#loader").show();
                await getDoctorData(page, title, author, genre, isbn, published, publisher);
                $("span#loader").hide();
            });
        });
    })(jQuery);
    $(document).ready(function() {
        var showChar = 36;
        var paginatLi = 5;
        var ellipsestext = "...";
        var moretext = "read more";
        var lesstext = "less";
        $('.more').each(function() {
            var content = $(this).html();
            if (content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar - 0, content.length - showChar);
                var html = c + '<span class="moreellipses">' + ellipsestext +
                    '&nbsp;</span><span class="morecontent"><span>' + h +
                    '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                $(this).html(html);
            }
        });
        $(".morelink").click(function() {
            if ($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });

async function showAvaibility(doctorId) {

    let result;
        try {
            result = await $.ajax({
                url: SITE_URL + "/get-avaibility",
                type: "GET",
                data: { doctorId: doctorId},
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "html",
                success: function(reportHtmlContent) {
                    $("#show-avaibility").html("");
                    $("#show-avaibility").html(reportHtmlContent);

                    $('#show-time').modal({backdrop: 'static', keyboard: false})
                },
            });
            return result;
        } catch (error) {
            $("span#loader").hide();
            errorObj = $.parseJSON(error.responseText);
            console.log(errorObj);
        }
};
</script>
