
<!DOCTYPE html>
<html>
<head>
	<title>Student Register</title>
		<form action="/update1" name="myForm" method="post"class="forms">
			<label for="image">Upload Image <span class="spans">*</span></label>
				<input type="file" class="files" name="image" id="image"><br><br><br>
                <div>  @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif  </div>

		</div>
	</div>	<br>
	<div class="border3">

			<input type="submit" name="sub" id="sub" value="+ Register" class="button1">

			<a href="#"><input type="button" name="res" id="res" value="x Cancel" class="button2" ></a>
            @csrf
	</div>


		</form>

	</div>

</body>
</html


