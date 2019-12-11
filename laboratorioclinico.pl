%sintomas Colesterol
sintomas_col(Colesterol,"Hinchazón de las extremidades").
sintomas_col(Colesterol,"Boca pastosa, seca y halitosis").
sintomas_col(Colesterol,"Pesadez en el estómago e indigestión").
sintomas_col(Colesterol,"Dificultades en el ritmo intestinal").
sintomas_col(Colesterol,"Aparición de urticaria").
sintomas_col(Colesterol,"Dolor en el pecho").
sintomas_col(Colesterol,"Dolor de cabeza").
sintomas_col(Colesterol,"Visión borrosa").
sintomas_col(Colesterol,"Agitación al moverse o hacer deporte").
sintomas_col(Colesterol,"Pérdida de equilibrio").
sintomas_col(Colesterol,"Accidente cerebro-vascular").
sintomas_col(Colesterol,"Ataque al corazón").


%sintomas estres
sintomas_estres(Estres,"Diarrea o estreñimiento").
sintomas_estres(Estres,"Mala memoria").
sintomas_estres(Estres,"Dolores y achaques frecuentes").
sintomas_estres(Estres,"Dolores de cabeza").
sintomas_estres(Estres,"Falta de energía o concentración").
sintomas_estres(Estres,"Problemas sexuales").
sintomas_estres(Estres,"Cuello o mandíbula rígidos").
sintomas_estres(Estres,"Cansancio").
sintomas_estres(Estres,"Problemas para dormir o dormir demasiado").
sintomas_estres(Estres,"Malestar de estómago").
sintomas_estres(Estres,"Uso de alcohol o drogas para relajarse").
sintomas_estres(Estres,"Pérdida o aumento de peso").

%sintomas preinfarto
sintomas_infarto(Infarto,"Nauseas").
sintomas_infarto(Infarto,"Fatiga").
sintomas_infarto(Infarto,"Dificultad para respirar").
sintomas_infarto(Infarto,"Ansiedad").
sintomas_infarto(Infarto,"Transpiracion").
sintomas_infarto(Infarto,"Mareo").

sintomascolesterol:-sintomas_col(Colesterol,X),write(X),write(;).
sintomasestres:-sintomas_estres(Estres,Y),write(Y),write(;).
sintomasinfarto:-sintomas_infarto(Infarto,X),write(X),write(;).



