<?php
// products.php - sample data without DB.
// In a production project, replace with database storage.
function get_products(){
    return [
        [
            "id" => 1,
            "title" => "Cadeira restaurada (estilo industrial)",
            "category" => "Móveis",
            "condition" => "Usado - restaurado",
            "price" => "Grátis ou troca",
            "image" => "assets/chair.jpg",
            "description" => "Cadeira de madeira restaurada por estudante de design. Pintura ecológica e assento reforçado."
        ],
        [
            "id" => 2,
            "title" => "Luminária feita com garrafas PET",
            "category" => "Iluminação",
            "condition" => "Nova",
            "price" => "R$ 35,00",
            "image" => "assets/lamp.jpg",
            "description" => "Luminária pendente produzida em oficina de upcycle. Perfeita para ambientes pequenos."
        ],
        [
            "id" => 3,
            "title" => "Bolsa jeans upcycled",
            "category" => "Acessórios",
            "condition" => "Usado",
            "price" => "R$ 25,00",
            "image" => "assets/bag.jpg",
            "description" => "Bolsa artesanal feita a partir de jeans reaproveitado. Alça reforçada."
        ]
    ];
}
?>
