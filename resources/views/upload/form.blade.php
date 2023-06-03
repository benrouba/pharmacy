
<form id="myForm" action="{{ route('upload.prescription') }}" method="POST" enctype="multipart/form-data" class="d-flex justify-content-end">
    @csrf
    <input type="file" name="prescription_image" id="prescription_image" style="display: none;">
    <label for="prescription_image" class="btn text-white f16 AvenirNextWorld shop_now_btn mt-4 mr-2" id="customBtn">
        <i class="fa fa-upload"></i>
    </label>
    <button class="btn text-white f16 AvenirNextWorld shop_now_btn mt-4 mr-2" type="submit" id="submitBtn" style="display: none;">
        Soumettre l'ordonnance
    </button>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#prescription_image').change(function() {
            var fileName = $(this).val().split('\\').pop();
            $('#customBtn').text(fileName);
            $('#customBtn').css('background-color', 'green');
            $('#submitBtn').show();
        });
    });
</script>






