<div class="container">
    <div class="row">
        <h2>{l s='DIY E-Liquid Calculator' mod='everpseliquid'}</h2>

        <div class="col-md-6">
            <h3>{l s='Calculation' mod='everpseliquid'}</h3>

            <div class="form-group">
                <label for="quantity">{l s='Quantity :' mod='everpseliquid'}</label>
                <div class="input-group">
                    <input type="number" min="1" class="form-control" id="quantity" name="eliquidInput" />
                    <div class="input-group-addon">{l s='ml' mod='everpseliquid'}</div>
                </div>
                <small class="form-text text-muted">{l s='The total eliquid quantity you need' mod='everpseliquid'}</small>
            </div>

            <div class="form-group">
                <label for="nicotine">{l s='Nicotine :' mod='everpseliquid'}</label>
                <div class="input-group">
                    <input type="number" min="1" max="20" class="form-control" id="nicotine" name="eliquidInput" />
                    <div class="input-group-addon">{l s='mg/ml' mod='everpseliquid'}</div>
                </div>
                <small class="form-text text-muted">{l s='The nicotine level' mod='everpseliquid'}</small>
            </div>
        </div>

        <div class="col-md-6">
            <h3>{l s='Results' mod='everpseliquid'}</h3>
            <p>
                {l s='Booster (in 20 mg) :' mod='everpseliquid'}
                <strong><span id="booster"></span></strong> {l s='ml' mod='everpseliquid'}
            </p>
            <p>
                {l s='Base :' mod='everpseliquid'}
                <strong><span id="base"></span></strong> {l s='ml' mod='everpseliquid'}
            </p>

            <div class="form-group error" style="display:none;">
                <div id="eliquid_error" class="alert alert-warning">
                    {l s='Quantity field must be a number greater than 0 and Nicotine field must be a number greater than 0 and less than 20.' mod='everpseliquid'}
                </div>
            </div>
        </div>

    </div>
</div>
