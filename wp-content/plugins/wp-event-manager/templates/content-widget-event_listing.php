<!-- Events Display Widget--><div class="wpem-main wpem-single-event-widget">	<a href="<?php the_permalink(); ?>"		class="wpem-event-action-url event-widget">		<div class="wpem-event-banner">			<div class="wpem-event-banner-img"><?php display_event_banner(); ?></div>		</div>		<div class="wpem-event-infomation">			<div class="wpem-event-details">				<div class="wpem-event-title">					<h3 class="wpem-heading-text"						title="<?php echo esc_html( get_the_title() ); ?>"><?php echo esc_html( get_the_title() ); ?></h3>				</div>				<div class="wpem-event-date-time">					<span class="wpem-event-date-time-text"><?php display_event_start_date();?></span>				</div>				<div class="wpem-event-location">					<span class="wpem-event-location-text"><?php if(get_event_location()=='Anywhere'): echo __('Online Event','wp-event-manager'); else:  display_event_location(false); endif; ?></span>				</div>                <?php if ( get_option( 'event_manager_enable_event_types' ) ) {  ?>        <div					class="wpem-event-type">					<?php display_event_type(); ?>				</div>        <?php } ?>          				<div class="wpem-event-ticket-type">					<span class="wpem-event-ticket-type-text"><?php echo '#'.get_event_ticket_option(); ?></span>				</div>			</div>		</div>	</a></div>