				<div id="sec-user" class="sec-center st-item">
					<div class="row">
						<div class="span2 offset1">
							
							<!-- Get the avatar URL from Gravatar -->
							<?php
								$email = "iamnbutler@gmail.com";
								$default = "http://www.somewhere.com/homestar.jpg";
								$size = 160;

								$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
							?>

							<div id="avatar-wrap">
								<div id="avatar" style="background-image: url(<?php echo $grav_url; ?>);"></div>
							</div>
								
							<b>Nathan Butler</b></br>
							<i>Second Year</i>
						</div>
					<div class="span6">
						<p>My Courses</p>
						<table id="sec-courses-list" class="table table-hover table-striped table-bordered">
						<tr>
							<th>Name</th>
							<th>Course Number</th>
							<th>Credits</th>
						</tr>
						<tr>
							<td>Visual Language</td>
							<td>YSDN 1001</td>
							<td>3.0</td>
						</tr>
						<tr>
							<td>Design &amp; Image</td>
							<td>YSDN 1002</td>
							<td>3.0</td>
						</tr>
						<tr>
							<td>Typography 1</td>
							<td>YSDN 1005</td>
							<td>3.0</td>
						</tr>
						<tr>
							<td>Interactivity Design 1</td>
							<td>YSDN 1006</td>
							<td>3.0</td>
						</tr>
						<tr>
							<td>Critical Issues in Design</td>
							<td>YSDN 1101</td>
							<td>3.0</td>
						</tr>
					</table>
					</div>
					</div>
				</div>