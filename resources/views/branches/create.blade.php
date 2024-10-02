<form action="{{ route('branches.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Şube Adı:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label for="branch_type_id">Şube Türü:</label>
        <select id="branch_type_id" name="branch_type_id" class="form-control" required>
            <option value="">Seçiniz</option>
            @foreach($branchTypes as $branchType)
                <option value="{{ $branchType->id }}">{{ $branchType->name }}</option>
            @endforeach
        </select>
    </div>

    <div id="labels-container"></div> <!-- Label'ların dinamik olarak ekleneceği alan -->

    <button type="submit" class="btn btn-primary">Ekle</button>
</form>

<script>
    document.getElementById('branch_type_id').addEventListener('change', function() {
        const branchTypeId = this.value;
        const labelsContainer = document.getElementById('labels-container');

        labelsContainer.innerHTML = ''; // Önceki label'ları temizle

        // Örnek label'lar; bu kısmı ihtiyacına göre güncelleyebilirsin
        if (branchTypeId) {
            // Örneğin, belirli bir şube türüne göre label'ları ekleyebilirsin
            if (branchTypeId == 1) {
                labelsContainer.innerHTML += '<label for="label1">Label 1:</label><input type="text" class="form-control" name="label1">';
            } else if (branchTypeId == 2) {
                labelsContainer.innerHTML += '<label for="label2">Label 2:</label><input type="text" class="form-control" name="label2">';
            }
            // Diğer şube türlerine göre farklı label'lar eklenebilir
        }
    });
</script>
