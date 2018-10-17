<?= component('header'); ?>
<?= component('top'); ?>
<?php $Parsedown = new Parsedown(); ?>
<main>
  <?= component('rows', ['headline' => $headline]); ?>

  <div class="page">
    <format-text>
      <h1>Bästa lånen</h1>

      <?= $Parsedown->text('
Vårt stora mål är att förmedla de bästa lånen på marknaden. Med bästa menar vi lägst priser och bäst förmåner. Vi har också som ambition att ge information kring vanliga frågor när det gäller lån.
      ');
      ?>

      <h2>Räntefria lån</h2>
      
      <?= $Parsedown->text('
Vi gör vårt bästa för att samla alla räntefria lån under ett och samma tak. Efter en ny lag som trädde i kraft 1 september 2018 förändrades hela lånbranchen. Det gjorde att de flesta långivare som erbjöd räntefritt smslån antingen försvann helt från marknaden, bytte lånform till kreditkonto eller helt enkelt valde att ta ut en ränta för samtliga lån.

Trots detta finns några aktörer kvar på marknaden som ännu erbjuder räntefria smslån.

<a class="button" href="' . url('rantefritt') . '">Visa räntefria lån</a>

  <h2>Ny lag 1 september 2018</h2>

Enligt [Aftonbladet](https://www.aftonbladet.se/minekonomi/a/J1AXA7/stopp-for-svindyra-snabblanen) så innebär den nya lagen tre saker i huvudsak.

1. Det ligger ett räntetak som innebär att kredit och dröjsmålsräntan inte får bli högre än 40 procent.
2. Den totala kostnaden för lånet får inte överstiga det belopp du har lånat. Om du lånat 1000 kr betalar du inte tillbaka mer än 2000 kr.
3. Marknadsföringen ska vara måttfull. Man ska alltså ge korrekt information och inte överdriva fördelarna.
');
?>
    </format-text>
  </div>
</main>
<?= component('footer'); ?>