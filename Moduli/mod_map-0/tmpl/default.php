<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

?>
 
<div id="mod_map">
	<h3><?php echo $list['name']; ?></h3>
	<button id="map-toggle">More Info</button>
	<button id="direction-toggle">Directions</button>

	<figure id="map-figure">
		<div>
			<div id="mod_mapMap"></div>
		</div>

		<figcaption id="left-pane">
		<?php

			$i = 1;
			foreach($info as $infoItem){
				echo "<div class='infobox number".$i."'>";
				echo "<p class='infoTitle'>".$infoItem['name']."</p>";
				echo "<p class='inforMation'>".$infoItem['information']."</p>";
				echo "</div>";
				$i++;
			}
		?>
		</figcaption>
		
		<div id="right-pane">
			<button id="driving-toggle">Driving</button>
			<button id="walking-toggle">Walking</button>
			<button id="cycling-toggle">Cycling</button>
			<button id="transit-toggle">Public Transit</button>
			<div id="location-status"></div>
			<div id="direction-output"></div>
		</div>
	</figure>
</div>