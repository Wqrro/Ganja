<?php

/*
 *
 * Developed by Warro#7777
 * Join Ganja: ganja.bet:19132
 * My Discord: https://discord.gg/vasar
 * Repository: https://github.com/Wqrro/Ganja
 *
 */

declare(strict_types=1);

namespace Warro\generator;

use pocketmine\block\BlockLegacyIds;
use pocketmine\world\ChunkManager;
use pocketmine\world\generator\Generator;

class VoidGenerator extends Generator
{

	public function __construct(int $seed, string $preset)
	{
		parent::__construct($seed, $preset);
	}

	public function generateChunk(ChunkManager $world, int $chunkX, int $chunkZ): void
	{
		$chunk = $world->getChunk($chunkX, $chunkZ);

		if ($chunkX == 16 && $chunkZ == 16) {
			$chunk->setFullBlock(0, 64, 0, BlockLegacyIds::GRASS << 4);
		}
	}

	public function populateChunk(ChunkManager $world, int $chunkX, int $chunkZ): void
	{
	}
}