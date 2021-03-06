<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	City::create(['city' => 'Maroa', 'state_id' => 1]);
    	City::create(['city' => 'Puerto Ayacucho', 'state_id' => 1]);
    	City::create(['city' => 'San Fernando de Atabapo', 'state_id' => 1]);

    	City::create(['city' => 'Anaco', 'state_id' => 2]);
    	City::create(['city' => 'Aragua de Barcelona', 'state_id' => 2]);
    	City::create(['city' => 'Barcelona', 'state_id' => 2]);
    	City::create(['city' => 'Boca de Uchire', 'state_id' => 2]);
    	City::create(['city' => 'Cantaura', 'state_id' => 2]);
    	City::create(['city' => 'Clarines', 'state_id' => 2]);
    	City::create(['city' => 'El Chaparro', 'state_id' => 2]);
    	City::create(['city' => 'El Pao Anzoátegui', 'state_id' => 2]);
    	City::create(['city' => 'El Tigre', 'state_id' => 2]);
    	City::create(['city' => 'El Tigrito', 'state_id' => 2]);
    	City::create(['city' => 'Guanape', 'state_id' => 2]);
    	City::create(['city' => 'Guanta', 'state_id' => 2]);
    	City::create(['city' => 'Lechería', 'state_id' => 2]);
    	City::create(['city' => 'Onoto', 'state_id' => 2]);
    	City::create(['city' => 'Pariaguán', 'state_id' => 2]);
    	City::create(['city' => 'Píritu', 'state_id' => 2]);
    	City::create(['city' => 'Puerto La Cruz', 'state_id' => 2]);
    	City::create(['city' => 'Puerto Píritu', 'state_id' => 2]);
    	City::create(['city' => 'Sabana de Uchire', 'state_id' => 2]);
    	City::create(['city' => 'San Mateo Anzoátegui', 'state_id' => 2]);
    	City::create(['city' => 'San Pablo Anzoátegui', 'state_id' => 2]);
    	City::create(['city' => 'San Tomé', 'state_id' => 2]);
    	City::create(['city' => 'Santa Ana de Anzoátegui', 'state_id' => 2]);
    	City::create(['city' => 'Santa Fe Anzoátegui', 'state_id' => 2]);
    	City::create(['city' => 'Santa Rosa', 'state_id' => 2]);
    	City::create(['city' => 'Soledad', 'state_id' => 2]);
    	City::create(['city' => 'Urica', 'state_id' => 2]);
    	City::create(['city' => 'Valle de Guanape', 'state_id' => 2]);

    	City::create(['city' => 'Achaguas', 'state_id' => 3]);
    	City::create(['city' => 'Biruaca', 'state_id' => 3]);
    	City::create(['city' => 'Bruzual', 'state_id' => 3]);
    	City::create(['city' => 'El Amparo', 'state_id' => 3]);
    	City::create(['city' => 'El Nula', 'state_id' => 3]);
    	City::create(['city' => 'Elorza', 'state_id' => 3]);
    	City::create(['city' => 'Guasdualito', 'state_id' => 3]);
    	City::create(['city' => 'Mantecal', 'state_id' => 3]);
    	City::create(['city' => 'Puerto Páez', 'state_id' => 3]);
    	City::create(['city' => 'San Fernando de Apure', 'state_id' => 3]);
    	City::create(['city' => 'San Juan de Payara', 'state_id' => 3]);

    	City::create(['city' => 'Barbacoas', 'state_id' => 4]);
    	City::create(['city' => 'Cagua', 'state_id' => 4]);
    	City::create(['city' => 'Camatagua', 'state_id' => 4]);
    	City::create(['city' => 'Choroní', 'state_id' => 4]);
    	City::create(['city' => 'Colonia Tovar', 'state_id' => 4]);
    	City::create(['city' => 'El Consejo', 'state_id' => 4]);
    	City::create(['city' => 'La Victoria', 'state_id' => 4]);
    	City::create(['city' => 'Las Tejerías', 'state_id' => 4]);
    	City::create(['city' => 'Magdaleno', 'state_id' => 4]);
    	City::create(['city' => 'Maracay', 'state_id' => 4]);
    	City::create(['city' => 'Ocumare de La Costa', 'state_id' => 4]);
    	City::create(['city' => 'Palo Negro', 'state_id' => 4]);
    	City::create(['city' => 'San Casimiro', 'state_id' => 4]);
    	City::create(['city' => 'San Mateo', 'state_id' => 4]);
    	City::create(['city' => 'San Sebastián', 'state_id' => 4]);
    	City::create(['city' => 'Santa Cruz de Aragua', 'state_id' => 4]);
    	City::create(['city' => 'Tocorón', 'state_id' => 4]);
    	City::create(['city' => 'Turmero', 'state_id' => 4]);
    	City::create(['city' => 'Villa de', 'state_id' => 4]);
    	City::create(['city' => 'Zuata', 'state_id' => 4]);

    	City::create(['city' => 'Barinas', 'state_id' => 5]);
    	City::create(['city' => 'Barinitas', 'state_id' => 5]);
    	City::create(['city' => 'Barrancas', 'state_id' => 5]);
    	City::create(['city' => 'Calderas', 'state_id' => 5]);
    	City::create(['city' => 'Capitanejo', 'state_id' => 5]);
    	City::create(['city' => 'Ciudad Bolivia', 'state_id' => 5]);
    	City::create(['city' => 'El Cantón', 'state_id' => 5]);
    	City::create(['city' => 'Las Veguitas', 'state_id' => 5]);
    	City::create(['city' => 'Libertad de Barinas', 'state_id' => 5]);
    	City::create(['city' => 'Sabaneta', 'state_id' => 5]);
    	City::create(['city' => 'Santa Bárbara de Barinas', 'state_id' => 5]);
    	City::create(['city' => 'Socopó', 'state_id' => 5]);

    	City::create(['city' => 'Caicara del Orinoco', 'state_id' => 6]);
    	City::create(['city' => 'Canaima', 'state_id' => 6]);
    	City::create(['city' => 'Ciudad Bolívar', 'state_id' => 6]);
    	City::create(['city' => 'Ciudad Piar', 'state_id' => 6]);
    	City::create(['city' => 'El Callao', 'state_id' => 6]);
    	City::create(['city' => 'El Dorado', 'state_id' => 6]);
    	City::create(['city' => 'El Manteco', 'state_id' => 6]);
    	City::create(['city' => 'El Palmar', 'state_id' => 6]);
    	City::create(['city' => 'El Pao', 'state_id' => 6]);
    	City::create(['city' => 'Guasipati', 'state_id' => 6]);
    	City::create(['city' => 'Guri', 'state_id' => 6]);
    	City::create(['city' => 'La Paragua', 'state_id' => 6]);
    	City::create(['city' => 'Matanzas', 'state_id' => 6]);
    	City::create(['city' => 'Puerto Ordaz', 'state_id' => 6]);
    	City::create(['city' => 'San Félix', 'state_id' => 6]);
    	City::create(['city' => 'Santa Elena de Uairén', 'state_id' => 6]);
    	City::create(['city' => 'Tumeremo', 'state_id' => 6]);
    	City::create(['city' => 'Unare', 'state_id' => 6]);
    	City::create(['city' => 'Upata', 'state_id' => 6]);

    	City::create(['city' => 'Bejuma', 'state_id' => 7]);
    	City::create(['city' => 'Belén', 'state_id' => 7]);
    	City::create(['city' => 'Campo de Carabobo', 'state_id' => 7]);
    	City::create(['city' => 'Canoabo', 'state_id' => 7]);
    	City::create(['city' => 'Central Tacarigua', 'state_id' => 7]);
    	City::create(['city' => 'Chirgua', 'state_id' => 7]);
    	City::create(['city' => 'Ciudad Alianza', 'state_id' => 7]);
    	City::create(['city' => 'El Palito', 'state_id' => 7]);
    	City::create(['city' => 'Guacara', 'state_id' => 7]);
    	City::create(['city' => 'Guigue', 'state_id' => 7]);
    	City::create(['city' => 'Las Trincheras', 'state_id' => 7]);
    	City::create(['city' => 'Los Guayos', 'state_id' => 7]);
    	City::create(['city' => 'Mariara', 'state_id' => 7]);
    	City::create(['city' => 'Miranda', 'state_id' => 7]);
    	City::create(['city' => 'Montalbán', 'state_id' => 7]);
    	City::create(['city' => 'Morón', 'state_id' => 7]);
    	City::create(['city' => 'Naguanagua', 'state_id' => 7]);
    	City::create(['city' => 'Puerto Cabello', 'state_id' => 7]);
    	City::create(['city' => 'San Joaquín', 'state_id' => 7]);
    	City::create(['city' => 'Tocuyito', 'state_id' => 7]);
    	City::create(['city' => 'Urama', 'state_id' => 7]);
    	City::create(['city' => 'Valencia', 'state_id' => 7]);
    	City::create(['city' => 'Vigirimita', 'state_id' => 7]);

    	City::create(['city' => 'Aguirre', 'state_id' => 8]);
    	City::create(['city' => 'Apartaderos Cojedes', 'state_id' => 8]);
    	City::create(['city' => 'Arismendi', 'state_id' => 8]);
    	City::create(['city' => 'Camuriquito', 'state_id' => 8]);
    	City::create(['city' => 'El Baúl', 'state_id' => 8]);
    	City::create(['city' => 'El Limón', 'state_id' => 8]);
    	City::create(['city' => 'El Pao Cojedes', 'state_id' => 8]);
    	City::create(['city' => 'El Socorro', 'state_id' => 8]);
    	City::create(['city' => 'La Aguadita', 'state_id' => 8]);
    	City::create(['city' => 'Las Vegas', 'state_id' => 8]);
    	City::create(['city' => 'Libertad de Cojedes', 'state_id' => 8]);
    	City::create(['city' => 'Mapuey', 'state_id' => 8]);
    	City::create(['city' => 'Piñedo', 'state_id' => 8]);
    	City::create(['city' => 'Samancito', 'state_id' => 8]);
    	City::create(['city' => 'San Carlos', 'state_id' => 8]);
    	City::create(['city' => 'Sucre', 'state_id' => 8]);
    	City::create(['city' => 'Tinaco', 'state_id' => 8]);
    	City::create(['city' => 'Tinaquillo', 'state_id' => 8]);
    	City::create(['city' => 'Vallecito', 'state_id' => 8]);

    	City::create(['city' => 'Tucupita', 'state_id' => 9]);

    	City::create(['city' => 'Caracas', 'state_id' => 10]);
    	City::create(['city' => 'El Junquito', 'state_id' => 10]);

    	City::create(['city' => 'Adícora', 'state_id' => 11]);
    	City::create(['city' => 'Boca de Aroa', 'state_id' => 11]);
    	City::create(['city' => 'Cabure', 'state_id' => 11]);
    	City::create(['city' => 'Capadare', 'state_id' => 11]);
    	City::create(['city' => 'Capatárida', 'state_id' => 11]);
    	City::create(['city' => 'Chichiriviche', 'state_id' => 11]);
    	City::create(['city' => 'Churuguara', 'state_id' => 11]);
    	City::create(['city' => 'Coro', 'state_id' => 11]);
    	City::create(['city' => 'Cumarebo', 'state_id' => 11]);
    	City::create(['city' => 'Dabajuro', 'state_id' => 11]);
    	City::create(['city' => 'Judibana', 'state_id' => 11]);
    	City::create(['city' => 'La Cruz de Taratara', 'state_id' => 11]);
    	City::create(['city' => 'La Vela de Coro', 'state_id' => 11]);
    	City::create(['city' => 'Los Taques', 'state_id' => 11]);
    	City::create(['city' => 'Maparari', 'state_id' => 11]);
    	City::create(['city' => 'Mene de Mauroa', 'state_id' => 11]);
    	City::create(['city' => 'Mirimire', 'state_id' => 11]);
    	City::create(['city' => 'Pedregal', 'state_id' => 11]);
    	City::create(['city' => 'Píritu Falcón', 'state_id' => 11]);
    	City::create(['city' => 'Pueblo Nuevo Falcón', 'state_id' => 11]);
    	City::create(['city' => 'Puerto Cumarebo', 'state_id' => 11]);
    	City::create(['city' => 'Punta Cardón', 'state_id' => 11]);
    	City::create(['city' => 'Punto Fijo', 'state_id' => 11]);
    	City::create(['city' => 'San Juan de Los Cayos', 'state_id' => 11]);
    	City::create(['city' => 'San Luis', 'state_id' => 11]);
    	City::create(['city' => 'Santa Ana Falcón', 'state_id' => 11]);
    	City::create(['city' => 'Santa Cruz De Bucaral', 'state_id' => 11]);
    	City::create(['city' => 'Tocopero', 'state_id' => 11]);
    	City::create(['city' => 'Tocuyo de La Costa', 'state_id' => 11]);
    	City::create(['city' => 'Tucacas', 'state_id' => 11]);
    	City::create(['city' => 'Yaracal', 'state_id' => 11]);

    	City::create(['city' => 'Altagracia de Orituco', 'state_id' => 12]);
    	City::create(['city' => 'Cabruta', 'state_id' => 12]);
    	City::create(['city' => 'Calabozo', 'state_id' => 12]);
    	City::create(['city' => 'Camaguán', 'state_id' => 12]);
    	City::create(['city' => 'Chaguaramas Guárico', 'state_id' => 12]);
    	City::create(['city' => 'El Socorro', 'state_id' => 12]);
    	City::create(['city' => 'El Sombrero', 'state_id' => 12]);
    	City::create(['city' => 'Las Mercedes de Los Llanos', 'state_id' => 12]);
    	City::create(['city' => 'Lezama', 'state_id' => 12]);
    	City::create(['city' => 'Onoto', 'state_id' => 12]);
    	City::create(['city' => 'Ortíz', 'state_id' => 12]);
    	City::create(['city' => 'San José de Guaribe', 'state_id' => 12]);
    	City::create(['city' => 'San Juan de Los Morros', 'state_id' => 12]);
    	City::create(['city' => 'San Rafael de Laya', 'state_id' => 12]);
    	City::create(['city' => 'Santa María de Ipire', 'state_id' => 12]);
    	City::create(['city' => 'Tucupido', 'state_id' => 12]);
    	City::create(['city' => 'Valle de La Pascua', 'state_id' => 12]);
    	City::create(['city' => 'Zaraza', 'state_id' => 12]);

    	City::create(['city' => 'Aguada Grande', 'state_id' => 13]);
    	City::create(['city' => 'Atarigua', 'state_id' => 13]);
    	City::create(['city' => 'Barquisimeto', 'state_id' => 13]);
    	City::create(['city' => 'Bobare', 'state_id' => 13]);
    	City::create(['city' => 'Cabudare', 'state_id' => 13]);
    	City::create(['city' => 'Carora', 'state_id' => 13]);
    	City::create(['city' => 'Cubiro', 'state_id' => 13]);
    	City::create(['city' => 'Cují', 'state_id' => 13]);
    	City::create(['city' => 'Duaca', 'state_id' => 13]);
    	City::create(['city' => 'El Manzano', 'state_id' => 13]);
    	City::create(['city' => 'El Tocuyo', 'state_id' => 13]);
    	City::create(['city' => 'Guaríco', 'state_id' => 13]);
    	City::create(['city' => 'Humocaro Alto', 'state_id' => 13]);
    	City::create(['city' => 'Humocaro Bajo', 'state_id' => 13]);
    	City::create(['city' => 'La Miel', 'state_id' => 13]);
    	City::create(['city' => 'Moroturo', 'state_id' => 13]);
    	City::create(['city' => 'Quíbor', 'state_id' => 13]);
    	City::create(['city' => 'Río Claro', 'state_id' => 13]);
    	City::create(['city' => 'Sanare', 'state_id' => 13]);
    	City::create(['city' => 'Santa Inés', 'state_id' => 13]);
    	City::create(['city' => 'Sarare', 'state_id' => 13]);
    	City::create(['city' => 'Siquisique', 'state_id' => 13]);
    	City::create(['city' => 'Tintorero', 'state_id' => 13]);

    	City::create(['city' => 'Apartaderos Mérida', 'state_id' => 14]);
    	City::create(['city' => 'Arapuey', 'state_id' => 14]);
    	City::create(['city' => 'Bailadores', 'state_id' => 14]);
    	City::create(['city' => 'Caja Seca', 'state_id' => 14]);
    	City::create(['city' => 'Canaguá', 'state_id' => 14]);
    	City::create(['city' => 'Chachopo', 'state_id' => 14]);
    	City::create(['city' => 'Chiguara', 'state_id' => 14]);
    	City::create(['city' => 'Ejido', 'state_id' => 14]);
    	City::create(['city' => 'El Vigía', 'state_id' => 14]);
    	City::create(['city' => 'La Azulita', 'state_id' => 14]);
    	City::create(['city' => 'La Playa', 'state_id' => 14]);
    	City::create(['city' => 'Lagunillas Mérida', 'state_id' => 14]);
    	City::create(['city' => 'Mérida', 'state_id' => 14]);
    	City::create(['city' => 'Mesa de Bolívar', 'state_id' => 14]);
    	City::create(['city' => 'Mucuchíes', 'state_id' => 14]);
    	City::create(['city' => 'Mucujepe', 'state_id' => 14]);
    	City::create(['city' => 'Mucuruba', 'state_id' => 14]);
    	City::create(['city' => 'Nueva Bolivia', 'state_id' => 14]);
    	City::create(['city' => 'Palmarito', 'state_id' => 14]);
    	City::create(['city' => 'Pueblo Llano', 'state_id' => 14]);
    	City::create(['city' => 'Santa Cruz de Mora', 'state_id' => 14]);
    	City::create(['city' => 'Santa Elena de Arenales', 'state_id' => 14]);
    	City::create(['city' => 'Santo Domingo', 'state_id' => 14]);
    	City::create(['city' => 'Tabáy', 'state_id' => 14]);
    	City::create(['city' => 'Timotes', 'state_id' => 14]);
    	City::create(['city' => 'Torondoy', 'state_id' => 14]);
    	City::create(['city' => 'Tovar', 'state_id' => 14]);
    	City::create(['city' => 'Tucani', 'state_id' => 14]);
    	City::create(['city' => 'Zea', 'state_id' => 14]);

    	City::create(['city' => 'Araguita', 'state_id' => 15]);
    	City::create(['city' => 'Carrizal', 'state_id' => 15]);
    	City::create(['city' => 'Caucagua', 'state_id' => 15]);
    	City::create(['city' => 'Chaguaramas Miranda', 'state_id' => 15]);
    	City::create(['city' => 'Charallave', 'state_id' => 15]);
    	City::create(['city' => 'Chirimena', 'state_id' => 15]);
    	City::create(['city' => 'Chuspa', 'state_id' => 15]);
    	City::create(['city' => 'Cúa', 'state_id' => 15]);
    	City::create(['city' => 'Cupira', 'state_id' => 15]);
    	City::create(['city' => 'Curiepe', 'state_id' => 15]);
    	City::create(['city' => 'El Guapo', 'state_id' => 15]);
    	City::create(['city' => 'El Jarillo', 'state_id' => 15]);
    	City::create(['city' => 'Filas de Mariche', 'state_id' => 15]);
    	City::create(['city' => 'Guarenas', 'state_id' => 15]);
    	City::create(['city' => 'Guatire', 'state_id' => 15]);
    	City::create(['city' => 'Higuerote', 'state_id' => 15]);
    	City::create(['city' => 'Los Anaucos', 'state_id' => 15]);
    	City::create(['city' => 'Los Teques', 'state_id' => 15]);
    	City::create(['city' => 'Ocumare del Tuy', 'state_id' => 15]);
    	City::create(['city' => 'Panaquire', 'state_id' => 15]);
    	City::create(['city' => 'Paracotos', 'state_id' => 15]);
    	City::create(['city' => 'Río Chico', 'state_id' => 15]);
    	City::create(['city' => 'San Antonio de Los Altos', 'state_id' => 15]);
    	City::create(['city' => 'San Diego de Los Altos', 'state_id' => 15]);
    	City::create(['city' => 'San Fernando del Guapo', 'state_id' => 15]);
    	City::create(['city' => 'San Francisco de Yare', 'state_id' => 15]);
    	City::create(['city' => 'San José de Los Altos', 'state_id' => 15]);
    	City::create(['city' => 'San José de Río Chico', 'state_id' => 15]);
    	City::create(['city' => 'San Pedro de Los Altos', 'state_id' => 15]);
    	City::create(['city' => 'Santa Lucía', 'state_id' => 15]);
    	City::create(['city' => 'Santa Teresa', 'state_id' => 15]);
    	City::create(['city' => 'Tacarigua de La Laguna', 'state_id' => 15]);
    	City::create(['city' => 'Tacarigua de Mamporal', 'state_id' => 15]);
    	City::create(['city' => 'Tácata', 'state_id' => 15]);
    	City::create(['city' => 'Turumo', 'state_id' => 15]);

    	City::create(['city' => 'Aguasay', 'state_id' => 16]);
    	City::create(['city' => 'Aragua de Maturín', 'state_id' => 16]);
    	City::create(['city' => 'Barrancas del Orinoco', 'state_id' => 16]);
    	City::create(['city' => 'Caicara de Maturín', 'state_id' => 16]);
    	City::create(['city' => 'Caripe', 'state_id' => 16]);
    	City::create(['city' => 'Caripito', 'state_id' => 16]);
    	City::create(['city' => 'Chaguaramal', 'state_id' => 16]);
    	City::create(['city' => 'Chaguaramas Monagas', 'state_id' => 16]);
    	City::create(['city' => 'El Furrial', 'state_id' => 16]);
    	City::create(['city' => 'El Tejero', 'state_id' => 16]);
    	City::create(['city' => 'Jusepín', 'state_id' => 16]);
    	City::create(['city' => 'La Toscana', 'state_id' => 16]);
    	City::create(['city' => 'Maturín', 'state_id' => 16]);
    	City::create(['city' => 'Miraflores', 'state_id' => 16]);
    	City::create(['city' => 'Punta de Mata', 'state_id' => 16]);
    	City::create(['city' => 'Quiriquire', 'state_id' => 16]);
    	City::create(['city' => 'San Antonio de Maturín', 'state_id' => 16]);
    	City::create(['city' => 'San Vicente Monagas', 'state_id' => 16]);
    	City::create(['city' => 'Santa Bárbara', 'state_id' => 16]);
    	City::create(['city' => 'Temblador', 'state_id' => 16]);
    	City::create(['city' => 'Teresen', 'state_id' => 16]);
    	City::create(['city' => 'Uracoa', 'state_id' => 16]);

    	City::create(['city' => 'Uracoa', 'state_id' => 17]);
    	City::create(['city' => 'Boca de Pozo', 'state_id' => 17]);
    	City::create(['city' => 'Boca de Río', 'state_id' => 17]);
    	City::create(['city' => 'El Espinal', 'state_id' => 17]);
    	City::create(['city' => 'El Valle del Espíritu Santo', 'state_id' => 17]);
    	City::create(['city' => 'El Yaque', 'state_id' => 17]);
    	City::create(['city' => 'Juangriego', 'state_id' => 17]);
    	City::create(['city' => 'La Asunción', 'state_id' => 17]);
    	City::create(['city' => 'La Guardia', 'state_id' => 17]);
    	City::create(['city' => 'Pampatar', 'state_id' => 17]);
    	City::create(['city' => 'Porlamar', 'state_id' => 17]);
    	City::create(['city' => 'Puerto Fermín', 'state_id' => 17]);
    	City::create(['city' => 'Punta de Piedras', 'state_id' => 17]);
    	City::create(['city' => 'San Francisco de Macanao', 'state_id' => 17]);
    	City::create(['city' => 'San Juan Bautista', 'state_id' => 17]);
    	City::create(['city' => 'San Pedro de Coche', 'state_id' => 17]);
    	City::create(['city' => 'Santa Ana de Nueva Esparta', 'state_id' => 17]);
    	City::create(['city' => 'Villa Rosa', 'state_id' => 17]);

    	City::create(['city' => 'Acarigua', 'state_id' => 18]);
    	City::create(['city' => 'Agua Blanca', 'state_id' => 18]);
    	City::create(['city' => 'Araure', 'state_id' => 18]);
    	City::create(['city' => 'Biscucuy', 'state_id' => 18]);
    	City::create(['city' => 'Boconoito', 'state_id' => 18]);
    	City::create(['city' => 'Campo Elías', 'state_id' => 18]);
    	City::create(['city' => 'Chabasquén', 'state_id' => 18]);
    	City::create(['city' => 'Guanare', 'state_id' => 18]);
    	City::create(['city' => 'Guanarito', 'state_id' => 18]);
    	City::create(['city' => 'La Aparición', 'state_id' => 18]);
    	City::create(['city' => 'La Misión', 'state_id' => 18]);
    	City::create(['city' => 'Mesa de Cavacas', 'state_id' => 18]);
    	City::create(['city' => 'Ospino', 'state_id' => 18]);
    	City::create(['city' => 'Papelón', 'state_id' => 18]);
    	City::create(['city' => 'Payara', 'state_id' => 18]);
    	City::create(['city' => 'Pimpinela', 'state_id' => 18]);
    	City::create(['city' => 'Píritu de Portuguesa', 'state_id' => 18]);
    	City::create(['city' => 'San Rafael de Onoto', 'state_id' => 18]);
    	City::create(['city' => 'Santa Rosalía', 'state_id' => 18]);
    	City::create(['city' => 'Turén', 'state_id' => 18]);
    	City::create(['city' => 'Altos de Sucre', 'state_id' => 18]);

    	City::create(['city' => 'Araya', 'state_id' => 19]);
    	City::create(['city' => 'Cariaco', 'state_id' => 19]);
    	City::create(['city' => 'Carúpano', 'state_id' => 19]);
    	City::create(['city' => 'Casanay', 'state_id' => 19]);
    	City::create(['city' => 'Cumaná', 'state_id' => 19]);
    	City::create(['city' => 'Cumanacoa', 'state_id' => 19]);
    	City::create(['city' => 'El Morro Puerto Santo', 'state_id' => 19]);
    	City::create(['city' => 'El Pilar', 'state_id' => 19]);
    	City::create(['city' => 'El Poblado', 'state_id' => 19]);
    	City::create(['city' => 'Guaca', 'state_id' => 19]);
    	City::create(['city' => 'Guiria', 'state_id' => 19]);
    	City::create(['city' => 'Irapa', 'state_id' => 19]);
    	City::create(['city' => 'Manicuare', 'state_id' => 19]);
    	City::create(['city' => 'Mariguitar', 'state_id' => 19]);
    	City::create(['city' => 'Río Caribe', 'state_id' => 19]);
    	City::create(['city' => 'San Antonio del Golfo', 'state_id' => 19]);
    	City::create(['city' => 'San José de Aerocuar', 'state_id' => 19]);
    	City::create(['city' => 'San Vicente de Sucre', 'state_id' => 19]);
    	City::create(['city' => 'Santa Fe de Sucre', 'state_id' => 19]);
    	City::create(['city' => 'Tunapuy', 'state_id' => 19]);
    	City::create(['city' => 'Yaguaraparo', 'state_id' => 19]);
    	City::create(['city' => 'Yoco', 'state_id' => 19]);

    	City::create(['city' => 'Abejales', 'state_id' => 20]);
    	City::create(['city' => 'Borota', 'state_id' => 20]);
    	City::create(['city' => 'Bramon', 'state_id' => 20]);
    	City::create(['city' => 'Capacho', 'state_id' => 20]);
    	City::create(['city' => 'Colón', 'state_id' => 20]);
    	City::create(['city' => 'Coloncito', 'state_id' => 20]);
    	City::create(['city' => 'Cordero', 'state_id' => 20]);
    	City::create(['city' => 'El Cobre', 'state_id' => 20]);
    	City::create(['city' => 'El Pinal', 'state_id' => 20]);
    	City::create(['city' => 'Independencia', 'state_id' => 20]);
    	City::create(['city' => 'La Fría', 'state_id' => 20]);
    	City::create(['city' => 'La Grita', 'state_id' => 20]);
    	City::create(['city' => 'La Pedrera', 'state_id' => 20]);
    	City::create(['city' => 'La Tendida', 'state_id' => 20]);
    	City::create(['city' => 'Las Delicias', 'state_id' => 20]);
    	City::create(['city' => 'Las Hernández', 'state_id' => 20]);
    	City::create(['city' => 'Lobatera', 'state_id' => 20]);
    	City::create(['city' => 'Michelena', 'state_id' => 20]);
    	City::create(['city' => 'Palmira', 'state_id' => 20]);
    	City::create(['city' => 'Pregonero', 'state_id' => 20]);
    	City::create(['city' => 'Queniquea', 'state_id' => 20]);
    	City::create(['city' => 'Rubio', 'state_id' => 20]);
    	City::create(['city' => 'San Antonio del Tachira', 'state_id' => 20]);
    	City::create(['city' => 'San Cristobal', 'state_id' => 20]);
    	City::create(['city' => 'San José de Bolívar', 'state_id' => 20]);
    	City::create(['city' => 'San Josecito', 'state_id' => 20]);
    	City::create(['city' => 'San Pedro del Río', 'state_id' => 20]);
    	City::create(['city' => 'Santa Ana Táchira', 'state_id' => 20]);
    	City::create(['city' => 'Seboruco', 'state_id' => 20]);
    	City::create(['city' => 'Táriba', 'state_id' => 20]);
    	City::create(['city' => 'Umuquena', 'state_id' => 20]);
    	City::create(['city' => 'Ureña', 'state_id' => 20]);

    	City::create(['city' => 'Batatal', 'state_id' => 21]);
    	City::create(['city' => 'Betijoque', 'state_id' => 21]);
    	City::create(['city' => 'Boconó', 'state_id' => 21]);
    	City::create(['city' => 'Carache', 'state_id' => 21]);
    	City::create(['city' => 'Chejende', 'state_id' => 21]);
    	City::create(['city' => 'Cuicas', 'state_id' => 21]);
    	City::create(['city' => 'El Dividive', 'state_id' => 21]);
    	City::create(['city' => 'El Jaguito', 'state_id' => 21]);
    	City::create(['city' => 'Escuque', 'state_id' => 21]);
    	City::create(['city' => 'Isnotú', 'state_id' => 21]);
    	City::create(['city' => 'Jajó', 'state_id' => 21]);
    	City::create(['city' => 'La Ceiba', 'state_id' => 21]);
    	City::create(['city' => 'La Concepción de Trujllo', 'state_id' => 21]);
    	City::create(['city' => 'La Mesa de Esnujaque', 'state_id' => 21]);
    	City::create(['city' => 'La Puerta', 'state_id' => 21]);
    	City::create(['city' => 'La Quebrada', 'state_id' => 21]);
    	City::create(['city' => 'Mendoza Fría', 'state_id' => 21]);
    	City::create(['city' => 'Meseta de Chimpire', 'state_id' => 21]);
    	City::create(['city' => 'Monay', 'state_id' => 21]);
    	City::create(['city' => 'Motatán', 'state_id' => 21]);
    	City::create(['city' => 'Pampán', 'state_id' => 21]);
    	City::create(['city' => 'Pampanito', 'state_id' => 21]);
    	City::create(['city' => 'Sabana de Mendoza', 'state_id' => 21]);
    	City::create(['city' => 'San Lázaro', 'state_id' => 21]);
    	City::create(['city' => 'Santa Ana de Trujillo', 'state_id' => 21]);
    	City::create(['city' => 'Tostós', 'state_id' => 21]);
    	City::create(['city' => 'Trujillo', 'state_id' => 21]);
    	City::create(['city' => 'Valera', 'state_id' => 21]);

    	City::create(['city' => 'Carayaca', 'state_id' => 22]);
    	City::create(['city' => 'Catia La Mar', 'state_id' => 22]);
    	City::create(['city' => 'La Guaira', 'state_id' => 22]);
    	City::create(['city' => 'Litoral', 'state_id' => 22]);
    	City::create(['city' => 'Macuto', 'state_id' => 22]);
    	City::create(['city' => 'Naiguatá', 'state_id' => 22]);

    	City::create(['city' => 'Aroa', 'state_id' => 23]);
    	City::create(['city' => 'Boraure', 'state_id' => 23]);
    	City::create(['city' => 'Campo Elías de Yaracuy', 'state_id' => 23]);
    	City::create(['city' => 'Chivacoa', 'state_id' => 23]);
    	City::create(['city' => 'Cocorote', 'state_id' => 23]);
    	City::create(['city' => 'Farriar', 'state_id' => 23]);
    	City::create(['city' => 'Guama', 'state_id' => 23]);
    	City::create(['city' => 'Marín', 'state_id' => 23]);
    	City::create(['city' => 'Nirgua', 'state_id' => 23]);
    	City::create(['city' => 'Sabana de Parra', 'state_id' => 23]);
    	City::create(['city' => 'Salom', 'state_id' => 23]);
    	City::create(['city' => 'San Felipe', 'state_id' => 23]);
    	City::create(['city' => 'San Pablo de Yaracuy', 'state_id' => 23]);
    	City::create(['city' => 'Urachiche', 'state_id' => 23]);
    	City::create(['city' => 'Yaritagua', 'state_id' => 23]);
    	City::create(['city' => 'Yumare', 'state_id' => 23]);

    	City::create(['city' => 'Bachaquero', 'state_id' => 24]);
    	City::create(['city' => 'Bobures', 'state_id' => 24]);
    	City::create(['city' => 'Cabimas', 'state_id' => 24]);
    	City::create(['city' => 'Campo Concepción', 'state_id' => 24]);
    	City::create(['city' => 'Campo Mara', 'state_id' => 24]);
    	City::create(['city' => 'Campo Rojo', 'state_id' => 24]);
    	City::create(['city' => 'Carrasquero', 'state_id' => 24]);
    	City::create(['city' => 'Casigua', 'state_id' => 24]);
    	City::create(['city' => 'Chiquinquirá', 'state_id' => 24]);
    	City::create(['city' => 'Ciudad Ojeda', 'state_id' => 24]);
    	City::create(['city' => 'El Batey', 'state_id' => 24]);
    	City::create(['city' => 'El Carmelo', 'state_id' => 24]);
    	City::create(['city' => 'El Chivo', 'state_id' => 24]);
    	City::create(['city' => 'El Guayabo', 'state_id' => 24]);
    	City::create(['city' => 'El Mene', 'state_id' => 24]);
    	City::create(['city' => 'El Venado', 'state_id' => 24]);
    	City::create(['city' => 'Encontrados', 'state_id' => 24]);
    	City::create(['city' => 'Gibraltar', 'state_id' => 24]);
    	City::create(['city' => 'Isla de Toas', 'state_id' => 24]);
    	City::create(['city' => 'La Concepción del Zulia', 'state_id' => 24]);
    	City::create(['city' => 'La Paz', 'state_id' => 24]);
    	City::create(['city' => 'La Sierrita', 'state_id' => 24]);
    	City::create(['city' => 'Lagunillas del Zulia', 'state_id' => 24]);
    	City::create(['city' => 'Las Piedras de Perijá', 'state_id' => 24]);
    	City::create(['city' => 'Los Cortijos', 'state_id' => 24]);
    	City::create(['city' => 'Machiques', 'state_id' => 24]);
    	City::create(['city' => 'Maracaibo', 'state_id' => 24]);
    	City::create(['city' => 'Mene Grande', 'state_id' => 24]);
    	City::create(['city' => 'Palmarejo', 'state_id' => 24]);
    	City::create(['city' => 'Paraguaipoa', 'state_id' => 24]);
    	City::create(['city' => 'Potrerito', 'state_id' => 24]);
    	City::create(['city' => 'Pueblo Nuevo del Zulia', 'state_id' => 24]);
    	City::create(['city' => 'Puertos de Altagracia', 'state_id' => 24]);
    	City::create(['city' => 'Punta Gorda', 'state_id' => 24]);
    	City::create(['city' => 'Sabaneta de Palma', 'state_id' => 24]);
    	City::create(['city' => 'San Francisco', 'state_id' => 24]);
    	City::create(['city' => 'San José de Perijá', 'state_id' => 24]);
    	City::create(['city' => 'San Rafael del Moján', 'state_id' => 24]);
    	City::create(['city' => 'San Timoteo', 'state_id' => 24]);
    	City::create(['city' => 'Santa Bárbara Del Zulia', 'state_id' => 24]);
    	City::create(['city' => 'Santa Cruz de Mara', 'state_id' => 24]);
    	City::create(['city' => 'Santa Cruz del Zulia', 'state_id' => 24]);
    	City::create(['city' => 'Santa Rita', 'state_id' => 24]);
    	City::create(['city' => 'Sinamaica', 'state_id' => 24]);
    	City::create(['city' => 'Tamare', 'state_id' => 24]);
    	City::create(['city' => 'Tía Juana', 'state_id' => 24]);
    	City::create(['city' => 'Villa del Rosario', 'state_id' => 24]);
    }
}
