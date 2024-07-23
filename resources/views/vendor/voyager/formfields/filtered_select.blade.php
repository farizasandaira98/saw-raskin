<select class="form-control" name="{{ $row->field }}" id="kriteria_id">
    <option value="">Pilih Kriteria</option>
    @foreach($kriteria as $kriteriaItem)
        <option value="{{ $kriteriaItem->id }}">{{ $kriteriaItem->nama }}</option>
    @endforeach
</select>

<br>
<label for="sub_kriteria_id">Nama Sub Kriteria</label>

<select class="form-control" name="sub_kriteria_id" id="sub_kriteria_id" disabled>
    <option value="">Pilih Sub Kriteria</option>
    <!-- Sub kriteria options will be populated here via JavaScript -->
</select>

<script>
    document.getElementById('kriteria_id').addEventListener('change', function() {
        var kriteriaId = this.value;
        var subKriteriaSelect = document.getElementById('sub_kriteria_id');

        if (kriteriaId === "") {
            subKriteriaSelect.innerHTML = '<option value="">Pilih Sub Kriteria</option>';
            subKriteriaSelect.disabled = true;
        } else {
            fetch(`/api/sub_kriterias?kriteria_id=${kriteriaId}`)
                .then(response => response.json())
                .then(data => {
                    subKriteriaSelect.innerHTML = '';

                    data.forEach(function(subKriteria) {
                        var option = document.createElement('option');
                        option.value = subKriteria.id;
                        option.textContent = subKriteria.nama;
                        subKriteriaSelect.appendChild(option);
                    });

                    subKriteriaSelect.disabled = false;
                });
        }
    });

    // Ensure sub_kriteria_id is enabled before submitting the form
    document.querySelector('form').addEventListener('submit', function() {
        var subKriteriaSelect = document.getElementById('sub_kriteria_id');
        if (subKriteriaSelect.disabled) {
            subKriteriaSelect.disabled = false;
        }
    });

    // Initial check to ensure sub_kriteria_id is disabled if no kriteria_id is selected
    var initialKriteriaId = document.getElementById('kriteria_id').value;
    if (initialKriteriaId === "") {
        document.getElementById('sub_kriteria_id').disabled = true;
    }
</script>
