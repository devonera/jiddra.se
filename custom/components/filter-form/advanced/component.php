<div class="filter-form">
  <div class="form">
    <label>Lånebelopp</label>
    <div class="rangeslider">
      <input type="range" min="10" step="10" name="belopp"/>
      <output>50</output>
    </div>

    <label>Löptid</label>
    <div class="rangeslider">
      <input type="range" min="1000" max="30000" step="1000" name="loptid" />
      <output>3000</output>
    </div>

    <div class="checkboxes">
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="rantefritt"><span>Räntefritt</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="anmarkning"><span>Anmärkning godtas</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="inkomstkrav"><span>Utan inkomstkrav</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="eleg"><span>BankID / E-leg</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="oppetnu"><span>Öppet nu</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="chatt"><span>Har privat chatt</span></label>
      </div>
      <div class="item">
        <label><input type="checkbox" class="materail-checkbox-input" name="upplaggningsavgift"><span>Utan uppläggningsavgift</span></label>
      </div>
    </div>

    <div class="selectboxes">
      <div class="selectbox">
        <select id="color-select" name="color">
          <option value="" selected>-- Direktutbetalning bank --</option>
          <option value="danskebank">Danskebank</option>
          <option value="handelsbanken">Handelsbanken</option>
          <option value="nordea">Nordea</option>
          <option value="seb">SEB</option>
          <option value="swedbank">Swedbank</option>
        </select>
      </div>

      <div class="selectbox">
        <select id="age" name="age">
          <option value="" selected>-- Åldersgräns --</option>
          <option value="18">18 år</option>
          <option value="19">19 år</option>
          <option value="20">20 år</option>
          <option value="21">21 år</option>
        </select>
      </div>

      <div class="selectbox">
        <select id="type" name="type">
          <option value="" selected>-- Låntyp --</option>
          <option value="snabblan">Snabblån</option>
          <option value="privatlan">Privatlån</option>
          <option value="kreditkonto">Kreditkonto</option>          
        </select>
      </div>
    </div>

    <?= component('filter-form/submit-button'); ?>
  </div>
</div>