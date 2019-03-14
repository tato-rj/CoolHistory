<?php

use Illuminate\Database\Seeder;
use App\{Timeline, Frame};

class FramesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeline::byTitle('88 keys')->frames()->saveMany([
			new Frame([
				'background' => 'blue',
				'title' => '1720', 
				'content' => 'Bartolomeo Cristofori introduced the first hammer-action pianoforte, and is credited by many as the “inventor” of the piano'
			]),
			new Frame([
				'background' => 'teal',
				'title' => '1760', 
				'content' => 'The square piano was introduced by Johannes Zumpe in London, England'
			]),
			new Frame([
				'background' => 'pink',
				'title' => '1780', 
				'content' => 'The Stein and Stein-Streicher piano hammer changes improved the tone of grand pianos and were preferred by many contemporary composers'
			]),
			new Frame([
				'background' => 'green',
				'title' => '1811', 
				'content' => 'Several European manufacturers introduced upright pianos. Wornum’s upright became popular for its improved sound quality from others'
			]),
			new Frame([
				'background' => 'orange',
				'title' => '1853', 
				'content' => 'Foundation of the Steinway & Sons piano company. Regarded as one of the best piano company of all time, it still functions to this day.'
			]),
			new Frame([
				'background' => 'indigo',
				'title' => '1855', 
				'content' => 'Steinway & Sons introduced the first square piano with a new scale that revolutionized the sound quality and was adopted by all future manufacturers'
			]),
			new Frame([
				'background' => 'purple',
				'title' => '1880', 
				'content' => 'The square piano was officially “extinct” in both Europe and America. Uprights were the go-to space-saving pianos for the industrialization of urban cities'
			]),
			new Frame([
				'background' => 'green',
				'title' => '1891', 
				'content' => 'Foundation of Carnegie Hall, one of the most famous musical buildings in the world.'
			])
		]);

		Timeline::byTitle('Nicknames explained')->frames()->saveMany([
			new Frame([
				'background' => 'teal',
				'title' => 'Moonlight Sonata', 
				'subtitle' => 'Piano sonata no 14, op 27 no 2 by Beethoven',
				'content' => 'This nickname was given by the music critic Ludwig Rellstab, five years after Beethoven’s death. He claimed that the serenity of the first movement brought to mind the calm of Lake Lucerne under a moonlit sky. '
			]),
			new Frame([
				'background' => 'green',
				'title' => 'Pastoral Symphony',
				'subtitle' => 'Symphony no 6, op 68 by Beethoven',
				'content' => 'The composer himself gave this work its title: pastoral symphony or recollections of country life. Nature was immensely important to Beethoven, and he spent a great deal of time walking alone in the woods.'
			]),
			new Frame([
				'background' => 'orange',
				'title' => 'Raindrop prelude', 
				'subtitle' => 'Prelude in Db major, op 28 no 15 by Chopin',
				'content' => 'There is a legend that the piece was written during a storm, and that the “dripping” motif comes from a nightmarish vision the composer had of himself drowned in a lake, with icy water falling on his breast in heavy drops.'
			]),
			new Frame([
				'background' => 'purple',
				'title' => 'Emperor Concerto', 
				'subtitle' => 'Piano concerto no 5, op 73 by Beethoven',
				'content' => 'The majesty of this concerto, even in this quiet slow movement, seems perfectly expressed in its nickname, the Emperor. So it is ironic that Beethoven himself found the title abhorrent.'
			]),
			new Frame([
				'background' => 'indigo',
				'title' => 'Unfinished Symphony', 
				'subtitle' => 'Symphony no 8 in B minor, D 759 by Schubert',
				'content' => 'There is no ambiguity about this nickname! Schubert just never finished writing this symphony. He wrote just 2 movements; a 3rd movement was written but not orchestrated. What is not known is why it was left unfinished.'
			]),
			new Frame([
				'background' => 'pink',
				'title' => 'Trout Quintet', 
				'subtitle' => 'Piano Quinteto, D 667 by Schubert',
				'content' => '<i>The Trout</i> is the name of one of Schubert’s many songs: a light-hearted story of a fisherman trying to catch a fish. Much of the charm of the song comes from the piano accompaniment, which burbles merrily along just like the water of the stream.'
			]),
			new Frame([
				'background' => 'red',
				'title' => 'Pathétique Symphony', 
				'subtitle' => 'Symphony no 6 in B minor, op 74 by Tchaikovsky',
				'content' => 'We know the symphony by the French title <i>Pathétique</i>, which means poignant, full of pathos. Tchaikovsky, however, called the symphony <i>Patetičeskaja</i>, which is the Russian word for passionate or emotional.'
			])
		]);
    }
}
