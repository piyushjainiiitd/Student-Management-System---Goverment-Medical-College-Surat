<?php
function getResults() {
  $xml = new DOMDocument(); 
  $xml->load('events.xml'); 
  $events = array();
  foreach($xml->getElementsByTagName('event') as $event) { 
    $games = array();
    foreach($event->getElementsByTagName('game') as $game) {
      $games []= array( 'team1' => $game->getAttribute('team1'),
        'score1' => $game->getAttribute('score1'),
        'team2' => $game->getAttribute('team2'),
        'score2' => $game->getAttribute('score2') );
    }
    $events []= array( 'name' => $event->getAttribute('name'),
      'games' => $games );
  }
  return $events;
}
?>