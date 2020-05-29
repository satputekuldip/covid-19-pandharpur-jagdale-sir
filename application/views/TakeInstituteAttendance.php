<div class="container-fluid jumbo">
	<h1 class="text-center">Quarantine Attendance</h1>
	<div class="mb-2">
		<h3 class="text-center ">Attendance of Home Quarantine and Institute Quarantine Peoples.</h3>
	</div>
	<br>
	<br>
	<div class="container-fluid mx-auto">
		<form method="POST" action="http://localhost:8000/attendances" accept-charset="UTF-8" wtx-context="9ACFE3C0-E893-4B3B-8BF9-1A53928B3264"><input name="_token" type="hidden" value="c3RxZ71961LneCsYJqczOh69sX0yiH3GkRTW8oAQ" wtx-context="C24FB45D-6604-428E-88BD-5A495DA1B8F4">

			<!-- Patient Id Field -->
			<div class="form-group col-sm-6">
				<label for="patient_id">Patient Id:</label>
				<input class="form-control" name="patient_id" type="number" id="patient_id" wtx-context="5B2EF30C-E677-4138-8623-9F9E8D3AC102">
			</div>

			<!-- Checked At Field -->
			<div class="form-group col-sm-6">
				<label for="checked_at">Checked At:</label>
				<input class="form-control" id="checked_at" name="checked_at" type="date" wtx-context="E8B94DB4-7828-4588-817E-71158B435A7C">
			</div>


			<!-- Symptoms Field -->
			<div class="form-group col-sm-8 ">
				<label for="symptoms">Symptoms:</label>
				<textarea class="form-control" name="symptoms" cols="50" rows="5" id="symptoms"></textarea>
			</div>

			<!-- Remarks Field -->
			<div class="form-group col-sm-8">
				<label for="remarks">Remarks:</label>
				<textarea class="form-control" name="remarks" cols="50" rows="5" id="remarks" ></textarea>
			</div>

			<!-- Complete Quarantine Days Field -->
			<div class="form-group col-sm-6">
				<label for="complete_quarantine_days">Complete Quarantine Days:</label>
				<input class="form-control" name="complete_quarantine_days" type="number" id="complete_quarantine_days" wtx-context="1D673FE7-73FC-4C75-B637-721D0F8A0377">
			</div>

			<!-- Submit Field -->
			<div class="form-group col-sm-12">
				<input class="btn btn-primary" type="submit" value="Save" wtx-context="E587B8DB-DB2A-407E-82FF-01D7AB67C047">
				<a href="http://localhost:8000/attendances" class="btn btn-default">Cancel</a>
			</div>

		</form>
	</div>
</div>
