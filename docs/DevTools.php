<?php $title = 'DevTools'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>This plugin creates a tool for the bottom left of your screen which reveals the current breakpoint, <code>APP_ENV</code> and a grid column overlay with toggle.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Setup, DevTools } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Setup, DevTools],
  theme: {
    screens: {
      xs: "0",
      sm: "544px",
      md: "650px",
      lg: "990px",
      xl: "1300px",
      xxl: "1520px"
    },
    mainColWidths: {
      xs: "auto",
      sm: "auto",
      md: "auto",
      lg: "auto",
      xl: "auto",
      xxl: "1440px"
    },
    innerGutters: {
      xs: "10px",
      sm: "15px",
      md: "20px",
      lg: "30px",
      xl: "40px",
      xxl: "40px"
    },
    outerGutters: {
      xs: "20px",
      sm: "30px",
      md: "40px",
      lg: "40px",
      xl: "40px",
      xxl: "0px"
    },
    columnCount: {
      xs: "4",
      sm: "4",
      md: "8",
      lg: "12",
      xl: "12",
      xxl: "12"
    },
  }
  ...
};</code></pre>
  </figure>

  <p>Requires <code>Setup</code> plugin with <code>theme.innerGutters</code>, <code>theme.outerGutters</code>, <code>theme.screens</code>, <code>theme.mainColWidths</code> and <code>theme.columnCount</code> configured.</p>

  <p>Place the following HTML somewhere at the bottom of your DOM, outside of any containers/wrappers, before the closing <code>&lt;/body></code>:</p>


  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="dev-tools">
  &lt;button class="dev-tools-toggle" onClick="this.nextElementSibling.hidden = !this.nextElementSibling.hidden;">&lt;/button>
  &lt;div class="dev-tools-grid" hidden>&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>To (optionally) display the <code>APP_ENV</code> you'll need a <code>.env</code> file:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">.env</figcaption>
    <pre class="code-example-code"><code class="language-yml">APP_ENV=local</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <p>Its the little tool and breakpoint label at the bottom left of the screen ↙️.</p>

  <p>Give the button a click - you'll see the grid columns overlay - useful for design validation.</p>
</div>

<?php include 'includes/_footer.php'; ?>
