#!/usr/bin/env python3
import os
import requests
import re

# scan_range = list(range(18, 43))
scan_range = [37]

for i in scan_range:
    r = requests.get(f"http://chals2.eof.ais3.org:8000/waf/{i}")
    external = re.findall('@include(?:_once)?\s"\/var\/www\/html\/(.+)";', r.text)
    if external:
        external_waf = requests.get(f"http://chals2.eof.ais3.org:{30000+i}/{external[0]}")
    if external_waf.text:
        with open(f"{i}/external.php", "w") as f:
            f.write(external_waf.text)
    with open(f"{i}/waf.php", "w") as f:
        f.write(r.text)

os.system("git add . && git commit -m 'update waf' && git push origin master")

