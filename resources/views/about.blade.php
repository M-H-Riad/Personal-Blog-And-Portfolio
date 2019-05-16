@extends('layouts.home')

@section('about-content')

<div class="container bg-success" id="body">
	<div class="heading lg-heading text-center" id="heading">
		<h3><b>About Myself</b></h3>
		<p>I am Atm. Meshkat Hasan. I was born in Rangpur division and now I am living in Dhaka city. I am studying B.Sc in Software Engineering at Daffodil International University(DIU). I am working on multiple web based projects. I have father,mother younger sister and brother in my family. </p>
	</div>

	<div class="right">
		<form class="form-group" method="post" action="{{url('message')}}">
			{{ csrf_field() }}
			<table class="table table-hover table-bordered">
				<tr>
					<th colspan="2">If any question/suggestion, Please send message.</th>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" placeholder="Enter Your Name" required="required"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" placeholder="Enter Your Email" required="required"></td>
				</tr>
				<tr>
					<td>Topics:</td>
					<td><input type="topic" name="topic" placeholder="Enter Discussion Topic" required="required"></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="description" name="description" placeholder="Enter description" id="des" required="required"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Send Message" class="btn btn-primary"></td>
				</tr>
				
			</table>
			
		</form>	
	</div>

	<div class="about">
		<div class="image">
			<img src="\img/1.jpg" alt="M H Riad" id="img">
		</div>
		
		<div class="name">
			<h3><b>Meshkat Hasan (Riad)</b></h3>
		</div><hr>
		<div class="personal">
			<strong>Personal Information : </strong>
			<table>
				<tr>
					<td><b>Name :</b></td>
					<td>
						<small>
							Atm. Meshkat Hasan
						</small>
					</td>
				</tr>
				<tr>
					<td><b>Email :</b></td>
					<td>
						<small>
							meshkathasanriad@gmail.com
						</small>
					</td>
				</tr>
				<tr>
					<td> <b>Phone :</b></td>
					<td>
						<small>
							01701045486
						</small>
					</td>
				</tr>
				<tr>
					<td><b>Address : </b></td>
					<td>
						<small>
							58/jha West RazaBazar,
						Sher e Bangla Nagor, Dhaka.
						</small>
					</td>
				</tr>
			</table>
		</div><hr>
		<div class="education">
			<strong>Educational Information : </strong>
			<table>
				<tr>
					<td><b>BSc In software Engineering </b></td>
					<td>
						<small>Daffodil International University ,Dhaka <br>
						CGPA (Avg) : 3.60 out of 4.00</small>
					</td>
				</tr>
				<tr>
					<td><b>Higher Secondary Certificate  </b></td>
					<td>
						<small><br>Shah Asgar Ali College,Dhaperhat,Gaibandha.<br>Board: Dinajpur<br>
						Group: Science</small>

					</td>
				</tr>
				<tr>
					<td><b>Secondary School Certificate </b></td>
					<td>
						<small><br>Gila Bari High School, Rangpur<br>
							Board: Dinajpur<br>
							Group: Science
						</small>

					</td>
				</tr>
			</table>
		</div><hr>
		<div class="traning">
			<strong><b>Traning : </b> </strong>
			<table>
				<tr>
					<td><b>Graphics Design Professional </b></td>
					<td>
						<small><br> Global IT & Language Institute<br> Dhaka.
						</small>

					</td>
				</tr>
				<tr>
					<td><b>Web design & development </b></td>
					<td>
						<small><br>Sofolab <br> Software Engineering, DIU.
						</small>

					</td>
				</tr>
				<tr>
					<td><b>Ethical Hacking </b></td>
					<td>
						<small><br>ISACA <br> Software Engineering, DIU.
						</small>

					</td>
				</tr>
			</table>
		</div><hr>
		<div class="other">
			<strong>Skills : </strong>
			<table>
				<tr>
					<td><b>Programming </b></td>
					<td>
						<small>
							Basic C programming, PHP & Python.
						</small>

					</td>
				</tr>
				<tr>
					<td><b>Web Development </b></td>
					<td>
						<small>
							HTML5, CSS3, Bootstrap, JavaScript, PHP, MySQL.
						</small>

					</td>
				</tr>
				<tr>
					<td><b>Technology </b></td>
					<td>
						<small>
							Laravel Framework (MVC).
						</small>

					</td>
				</tr>
				<tr>
					<td><b>Other </b></td>
					<td>
						<small>
							Familiar with Git, Git Hub.<br>Languages: Fluent in “Bengali” & good communication skills in “English”.
						</small>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>



<style>
	.name{
		margin-top: 20px;
		text-align: center;
		padding: 2px;
	}
	strong{
		font-size: 140%;
	}
	.personal{
		margin-top: 15px;
		margin-left: 15px;
		font-size: 80%;
	}
	.education{
		margin-top: 15px;
		margin-left: 15px;
		font-size: 80%;
	}
	.traning{
		margin-top: 15px;
		margin-left: 15px;
		font-size: 80%;
	}
	.other{
		margin-top: 15px;
		margin-left: 15px;
		font-size: 80%;

	}
	#body{
		width: 100%;
		color: black;
	}
	#heading{
		margin-top: 65px;
		width: 50%;
		margin-left: 300px;
	}
	.about{
		width: 50%;
		margin-left: 20px;
		background-color: #ccccff;
		margin-bottom: 20px;
	}
	.image{
		float: right;
		height: 180px;
		width: 180px;
		background-color: green;
	}
	#img{
		height: 180px;
		width: 180px;
	}
	.right{
		float: right;
		width: 45%;
		height: 400px;
		overflow: hidden;
		margin-bottom: 20px;
		margin-top: 10px;
		background-color: #ccccff;
	}
	th{
		text-align: center;
	}
	#des{
		height: 100px;
		width: 270px;
		border-radius: 5px;
	}
</style>
@endsection
