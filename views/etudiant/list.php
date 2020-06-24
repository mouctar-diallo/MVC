<div class="col">
<h2 class="text-center mt-4">liste des etudiants</h2>
<div id="sroll">
    <table class="table table-stripped table-bordered table hover mt-2" id="table-student">
        <thead>
            <tr>
                <td>matricule</td>
                <td>nom & prenom</td>
                <td>email</td>
                <td>telephone</td>
                <td>adresse</td>
                <td>bourse</td>
                <td>numero chambre</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>mat 1</td>
                <td>ousseynou diop</td>
                <td>mvc@gmail.com</td>
                <td>22332322</td>
                <td>adresse</td>
                <td>non bourse</td>
                <td>numero chambre</td>
                <td class="text-center">
                    <a href="" class="btn btn-danger">delete</a>
                    <a href="" class="btn btn-primary">edit</a>
                </td>
            </tr>
            <tr>
                <td>mat 1</td>
                <td>ousseynou diop</td>
                <td>mvc@gmail.com</td>
                <td>22332322</td>
                <td>adresse</td>
                <td>demi bourse</td>
                <td>numero chambre</td>
                <td class="text-center">
                    <a href="" class="btn btn-danger">delete</a>
                    <a href="" class="btn btn-primary">edit</a>
                </td>
            </tr>
            <tr>
                <td>mat 1</td>
                <td>ousseynou diop</td>
                <td>mvc@gmail.com</td>
                <td>22332322</td>
                <td>adresse</td>
                <td>complet bourse</td>
                <td>numero chambre</td>
                <td class="text-center">
                    <a href="" class="btn btn-danger">delete</a>
                    <a href="" class="btn btn-primary">edit</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<script>
	$(document).ready( function () {
		$('#table-student').DataTable();
	});
</script>