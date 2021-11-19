<?php

const PICS_TOTAL = 80;
const PEN = 23;
const PENCIL = 40;

echo "Рисунков на выставке всего: " . PICS_TOTAL . '<br>';
echo "Нарисованы фломатсерами: " . PEN . '<br>';
echo "Нарисованы карандашами: " . PENCIL . '<br>';



$paints = PICS_TOTAL - PEN - PENCIL;

echo "Нарисованы красками: $paints";
