<div class="filter-form">
  <div class="form">
    <label>Lånebelopp</label>
    <div class="rangeslider">
      <input type="range" min="1000" max="30000" step="1000" name="belopp" value="5000" />
      <output class="kr">5 000</output>
    </div>
    <div data-panes>
      <div></div>
      <div>
        <h3>Förmåner</h3>

        <div class="checkboxes">
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="rantefritt"><span>Räntefritt</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="utanuc"><span>Utan UC</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="eleg"><span>BankID</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="oppetnu"><span>Är öppet nu</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="chatt"><span>Har chatt</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="upplaggningsavgift"><span>Ingen uppläggningsavgift</span></label>
          </div>
        </div>

        <h3>Krav</h3>

        <div class="checkboxes">
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="age"><span>Är under 21 år</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="inkomstkrav"><span>Saknar inkomst</span></label>
          </div>
          <div class="item">
            <label><input type="checkbox" class="materail-checkbox-input" name="anmarkning"><span>Har betalningsanmärkning</span></label>
          </div>
        </div>

        <div class="selectboxes">
          <div class="selectbox">
            <select id="bank" name="bank">
              <option value="" selected>- Direktutbetalning bank -</option>
              <option value="danskebank">Danskebank</option>
              <option value="handelsbanken">Handelsbanken</option>
              <option value="nordea">Nordea</option>
              <option value="seb">SEB</option>
              <option value="swedbank">Swedbank</option>
            </select>
          </div>

          <div class="selectbox">
            <select id="type" name="type">
              <option value="" selected>- Låntyp -</option>
              <option value="snabblan">Snabblån</option>
              <option value="privatlan">Privatlån</option>
              <option value="kreditkonto">Kreditkonto</option>          
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>