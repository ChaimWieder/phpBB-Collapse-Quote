# phpBB-Collapse-Quote

## Description
If quotes are very long, the box is displayed in a smaller size. A mouse click displays the entire quote.

#### Settings in User Control Panel > Board preferences > Edit display options
- No settings. 

#### Settings in Administration Control Panel
- Number of visible lines. 
- Button colors.

## Requirements
- php 7.3 or higher
- phpBB 3.2.0 or higher

## Installation
Copy the extension to `phpBB3/ext/imcger/collapsequote`.
Go to "ACP" > "Customise" > "Manage extensions" and enable the "Collapse Quote" extension.

## Changelog

### v0.4.0 (31-01-2022)
- Language support
- Settings in ACP

### v0.3.0 (20-01-2022)
- Minor code changes
- Adjust Quotebox when window resize

### v0.2.0 (19-01-2022)
- Code changes
- Add animation

### v0.1.0 (16-01-2022)

## Uninstallation
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for "Collapse Quote".
- To permanently uninstall, click `Delete Data`, then delete the `collapsequote` folder from `phpBB3/ext/imcger/`.

## License
[GPLv2](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)
