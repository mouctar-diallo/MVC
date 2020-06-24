<div class="col">
<h2 class="text-center mt-4">liste des chambres</h2>
    <table class="table table-stripped table-bordered table hover mt-2" id="table-chambre">
        <thead>
            <tr>
                <td>#</td>
                <td>numero</td>
                <td>type</td>
                <td>numero batiment</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>ch 1</td>
                <td>type</td>
                <td>1</td>
                <td class="text-center">
                    <a href="" class="btn btn-danger">delete</a>
                    <a href="" class="btn btn-primary">edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script>
	$(document).ready( function () {
		$('#table-chambre').DataTable();
	});
</script>