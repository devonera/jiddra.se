<?php
class ValidatorGroups {
  function home($f) {
    $f->add('slug', 'inArray', ['vivus', 'ferratum', 'meddelandelan', 'loanstep', 'natlan']);
    return $f;
  }

  function rantefritt($f) {
    $f->add('gratis_belopp_min', 'min', 0);
    return $f;
  }

  function snabblan($f) {
    $f->add('types', 'in', 'snabblan');
    return $f;
  }

  function kreditkonto($f) {
    $f->add('types', 'in', 'kreditkonto');
    return $f;
  }

  function api($f) {
    $_POST = json_decode(file_get_contents('php://input'), true);

    // Belopp
    if($_POST['belopp']) {
      $f->add('befintlig_kund_belopp_min', 'max', $_POST['belopp']);
      $f->add('befintlig_kund_belopp_max', 'min', $_POST['belopp']);
    }

    if(isset($_POST['type'])) {
      // Anmärkning
      if($_POST['anmarkning']) {
        $f->add('betalningsanm_accepteras', 'equals', 'true');
      }

      // Inkomstkrav
      if($_POST['inkomstkrav']) {
        $f->add('inkomstkrav', 'equals', '0');
      }

      // Inkomstkrav
      if($_POST['chatt']) {
        $f->add('chatt', 'equals', 'true');
      }

      // Åldersgräns
      if($_POST['age']) {
        $f->add('alder_min', 'max', 21);
      }

      // Snabblån
      if($_POST['type']) {
        $f->add('types', 'in', $_POST['type']);
      }

      // Räntefritt
      if($_POST['rantefritt']) {
        $f->add('gratis_belopp_min', 'min', 0);
      }

      // Räntefritt
      if($_POST['utanuc']) {
        $f->add('uc', 'equals', false);
      }

      // Bank
      if($_POST['bank']) {
        $f->add('direktutbetalning_banker', 'contains', $_POST['bank']);
      }

      // Eleg
      if($_POST['eleg']) {
        $f->add('identifiering', 'contains', 'bankid');
      }

      if($_POST['oppetnu']) {
        $f->add('oppettider', 'openNow', 'bankid');
      }
    }

    return $f;
  }
}