<div class="row">
    <div class="col">
        <nav id="header">
            <div class="top">
                <ul>
					<?php
					$sql = "SELECT link, title,class FROM header";
					$result = $conn->query( $sql );
					if ( $result->num_rows > 0 ) {
						while ( $row = $result->fetch_assoc() ) {
							?>
                            <li><a href="<?php echo $row['link']; ?>"><i class="<?php echo $row['class']; ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['title']; ?>"></i></a>
                            </li>
							<?php
						}
					} ;
					;?>
                </ul>
            </div>
            <br>
            <div class="bar">
                <ul>
					<?php
					$sql2    = "SELECT link, title FROM topbar";
					$result = $conn->query( $sql2 );

					if ( $result->num_rows > 0 ) {
						// output data of each row
						while ( $row = $result->fetch_assoc() ) {
							?>
                            <li><a href="<?php echo $row['link']; ?>"><?php echo $row["title"]; ?></a></li>
							<?php
						}
					} ?>
                </ul>
            </div>
        </nav>
    </div>
</div>