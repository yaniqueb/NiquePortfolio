<?php
$project_title = get_field('project_title', get_the_id());
$image = get_field('image', get_the_id());
$project_description = get_field('project_description', get_the_id());
$tech_stack = get_field('tech_stack', get_the_id());


?>

<div class="project <?php echo esc_attr('project-'. get_the_id() ); ?>">
								<div class="project__aside">
									<?php 
									if( $image ):
									?>
									<?php 
									echo wp_get_attachment_image( $image, 'full', '', ['class' => 'img project__img'] );
									?>
									<!-- <img class="img project__img" src="<?php //echo esc_attr( $image ); ?>" alt=""> replaced by above line -->
								<?php endif; ?>
								</div>
								<div class="project__info">
									<header class="project__header">
										<?php 
										if( $project_title ):
										?>
										<h3 class="project__title"><?php echo esc_html($project_title); ?></h3>
										<?php endif; ?>
									</header>
									<?php 
										if( $project_description ):
										?>
									<p class="project__copy"><?php echo esc_html($project_description); ?></p>
									<?php endif; ?>
									<div class="project__tag">
										<h4 class="project__tag-title">Tech Stack:</h4>
										<ul class="project__tag-list">
										<?php 
										if( $tech_stack ):
										?>
											<li class="tag-item"><?php echo esc_html($tech_stack); ?></li>
											<?php endif; ?>
										</ul>
									</div>
									<ul class="project__action">
										<li class="project__list-item">
											<a href="https://github.com/yaniqueb/hotel-site" class="btn" target="_blank" rel="noopener noreferrer">View Code 
												<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path d="M278.9 511.5l-61-17.7c-6.4-1.8-10-8.5-8.2-14.9L346.2 8.7c1.8-6.4 8.5-10 14.9-8.2l61 17.7c6.4 1.8 10 8.5 8.2 14.9L293.8 503.3c-1.9 6.4-8.5 10.1-14.9 8.2zm-114-112.2l43.5-46.4c4.6-4.9 4.3-12.7-.8-17.2L117 256l90.6-79.7c5.1-4.5 5.5-12.3.8-17.2l-43.5-46.4c-4.5-4.8-12.1-5.1-17-.5L3.8 247.2c-5.1 4.7-5.1 12.8 0 17.5l144.1 135.1c4.9 4.6 12.5 4.4 17-.5zm327.2.6l144.1-135.1c5.1-4.7 5.1-12.8 0-17.5L492.1 112.1c-4.8-4.5-12.4-4.3-17 .5L431.6 159c-4.6 4.9-4.3 12.7.8 17.2L523 256l-90.6 79.7c-5.1 4.5-5.5 12.3-.8 17.2l43.5 46.4c4.5 4.9 12.1 5.1 17 .6z">

													</path>
												</svg>
											</a>
										</li>
										<li class="project__list-item">
											<a href="https://flashcardtb.herokuapp.com/" class="btn" target="_blank" rel="noopener noreferrer">View Site <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="btn--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">

													</path>
												</svg>
											</a>
										</li>
									</ul>
								</div>
							</div>
              <?php