
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaix Daily Report System | CheckOut</title>
    <link rel="shortcut icon" href="https://vaixgroup.com/wp-content/uploads/2020/12/logo-vaix-2.svg" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

    <style>
        .form-control {
            display: inline !important;
            width: 45%;
        }
    </style>
</head>

<body style="background-color:lightsteelblue;">
<div class="container-full text-center  h-50 p-4 mb-4 align-middle w-100" style="background-color:#66FFCC">
    <div style="display:flex; font-family: Arial, Helvetica, sans-serif">

        <div class="col">
            <h3><a href="#" class="text-body text-decoration-none">
                    Vaix Daily Report System</a></h3>
        </div>
        <div class="col">
            <h3>
                <a href="{{route('login/checkout')}}" class="text-body text-decoration-none">Logout</a>
            </h3>
        </div>
    </div>
</div>
<div class="container-full mb-2 align-middle w-75" style="display:flex; justify-content: flex-end;font-size:25px">
    <div style="margin-right:25px"><span class="">ID:</span>0006</div>
    <div><span>Name:</span>phát</div>
</div>
<form action="https://phanmemchamcong.herokuapp.com/tablet/checkout" method="POST">

    <div class="container-full" style="display:flex; justify-content: center">
        <input type="text" placeholder="Select Date.." id="flatpickr" name="day_work" class="form-control w-25"
               value="today">
    </div>
    <p></p>
    <div class="container">
        <input type="hidden" name="_token" value="R3sJ2JQCyrVLuH6bmpOvKwwtrPLrdRZfoId6nvR8">            <div id="item-group" style="margin:0 auto; width:75%">
            <button class="btn btn-primary " id="add-item" type="button">
                <i class="fa-sharp fa-solid fa-plus"></i>
            </button>
        </div>


        <p></p>
        <div style="display:flex; justify-content: center">

            <button type="submit" class="btn btn-info ">Save & Logout</button>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    $(document).ready(function() {
        function datePicker() {
            Date.prototype.toDateInputValue = (function() {
                var local = new Date(this);
                local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
                return local.toJSON().slice(0, 10);
            });
            $('#datePicker').val(new Date().toDateInputValue());
            $('#datePicker').attr('max', new Date().toDateInputValue());

        }
        datePicker();
        var count = 0;

        function getData(count) {
            $.ajax({
                type: "GET",
                url: "https://phanmemchamcong.herokuapp.com/api/project",
                dataType: "json",
                success: function(response) {
                    response.project.forEach(element => {
                        $(`#project-${count}`).append(
                            `<option data-id="project${element.id}" value="${element.id}">${element.name}</option>`
                        )
                    })
                }
            });
        }

        function checkSelect() {
            $(this).on("change", function(){
                console.log(10);
            })
        }
        getData(0);
        function Item(count) {

            var html = `${count > 0 ? "<p></p>" : ""}
                <div style="display: inline;" id="remove-item">
                    <select class="list form-control" id="project-${count}" name="project[]">
                        <option value="" hidden>Vui lòng chọn</option>
                    </select>
                    <input type="text" class="form-control"  >`
                    var remove = "";
                    if (count > 0) {
                        remove += ` <button class="btn btn-danger" type="button" id="remove">
                                            <i class="fa-solid fa-x"></i>
                                        </button>`;
                    }
                    html += `${remove}${count > 0 ? "<p></p>" : ""}
                </div>`;
            return html;

        }
        $("#item-group").prepend(Item(0));
        $("#add-item").click(function() {
            count++;
            getData(count);

            $("#item-group").append(Item(count));

        })
        $(document).on("click", "#remove", function() {
            $(this).closest("#remove-item").remove();
        });
        checkSelect();

    });

    // $('select').on('change', function(){
    //   alert(100);
    //     // let selectedValue = ;
    //     // let newSelectedValue = 2;
    //     // $('option').find(`[value=${selectedValue}]`).show();
    //     // $('option').find('[value=2]').hide();
    // })
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script>
    flatpickr("#flatpickr", {
        // locale: "ja",
        maxDate: "today",
        dateFormat: "Y/m/d",

    });
</script>
</body>

</html>
