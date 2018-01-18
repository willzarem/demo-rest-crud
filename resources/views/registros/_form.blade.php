 				<div class="input-group">
	 				 <span class="input-group-addon" id="basic-addon1">-</span>
	  				<input type="text" name='nombre'class="form-control" placeholder="Primer nombre" aria-describedby="basic-addon1" 
	  				value="{{isset($registro) ? $registro ->nombre : old('nombre')}}">
				</div>
				<br>
				<div class="input-group">
	 				 <span class="input-group-addon" id="basic-addon1">-</span>
	  				<input type="text" name='nombre2' class="form-control" placeholder="Segundo nombre" aria-describedby="basic-addon1"
	  				value="{{isset($registro) ? $registro ->nombre2: old('nombre2')}}">
				</div>
				<br>
				<div class="input-group">
	 				 <span class="input-group-addon" id="basic-addon1">-</span>
	  				<input type="text" name = 'apellido' class="form-control" placeholder="Primer apellido" aria-describedby="basic-addon1" 
	  				value="{{isset($registro) ? $registro ->apellido: old('apellido')}}">
				</div>
				<br>
				<div class="input-group">
	 				 <span class="input-group-addon" id="basic-addon1">-</span>
	  				<input type="text" name = 'apellido2' class="form-control" placeholder="Segundo apellido" aria-describedby="basic-addon1" value="{{isset($registro) ? $registro ->apellido2: old('apellido2')}}">
				</div>