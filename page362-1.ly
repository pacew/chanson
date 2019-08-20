% 362

\include "gregorian.ly"
\score {
  <<
    \new VaticanaVoice = "cantus" {
      \set Score.timing = ##f
      \clef "vaticana-do3"
      c'
      \[ c' \flexa b \]
      \[ b \flexa a \]
      \[ \virga b \inclinatum a \inclinatum g \]
      \[ g \flexa f \]
      \[ e \flexa d \]
      \[ f \flexa e \]
      \[ \virga e \inclinatum d \inclinatum c \]
      e
      f
      g
      \[ a \pes b \flexa g \]
      g
      \[ \inclinatum e \inclinatum d \inclinatum c \]
      e
      \[ f \pes \deminutum g \]
      g
      c'
      \[ c' \flexa b \]
    }
    \new Lyrics \lyricsto "cantus" {
      Onk el _ ne _ feuc _ _ chan _ con _
      furn _ u _ _ ne comn ench ier _ _ _
      ioli _ _ em enr _ _ fe ie
    }

  >>
}

\header {
  tagline = ##f
}