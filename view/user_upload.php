<div class="align-form">
	<?php
		if (isset($folderName)) {
			echo "<form class=\"center-form\" action=\"/user/doUpload?folderName=$folderName\" enctype=\"multipart/form-data\" method=\"post\">";
		} else {
			echo "<form class=\"center-form\" action=\"/user/doUpload\" enctype=\"multipart/form-data\" method=\"post\">";
		} ?>
      <div>
      <!--TODO LOGO -->
			<div>
        <input id="" class="input-form" name="file" type="file" >
		  	<input id="" class="input-form" name="name" type="text" placeholder="name">
			</div>
      <div>
				<label class="label-help">?</label><br>
				<input id="" class="input-form" name="tags" type="text" placeholder="tags">
			</div>
      <div>
				<label class="label-help">?</label><br>
				<input id="" class="input-form" name="acces" type="text" placeholder="acces">
			</div>
      <div class="submit-form-div">
				<input id="" class="submit-form" name="Submit" type="submit" value="upload">
			</div>
      </div>
			<?php
			if (isset($folderName)) {
				echo "<a href=\"/user/makeDir?folderName=$folderName\" class=\"form-switch\">Create a Folder</a>";
			} else {
				echo '<a href="/user/makeDir" class="form-switch">Create a Folder</a>';
			} ?>
  	  <a href="/user" class="form-switch">return</a>
	</form>
</div>
