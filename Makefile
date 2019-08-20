all:
	lilypond page362-1.ly
	lilypond -f png page362-1.ly
	convert page362-1.png -trim static/page362-1-trimmed.png

