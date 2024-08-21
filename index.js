const fastify = require('fastify')({ logger: true });
const path = require('path');
const fastifyStatic = require('@fastify/static');

// 静的ファイルを提供するための設定
fastify.register(fastifyStatic, {
  root: path.join(__dirname, 'public'),
  prefix: '/', // これで public フォルダ全体を提供します
});

// ルートエンドポイントの設定
fastify.get('/', async (request, reply) => {
  return reply.sendFile('index.html');
});

// サーバーの起動
const start = async () => {
  try {
    await fastify.listen({ port: 5001, host: '0.0.0.0' });
    fastify.log.info(`Server is running at http://localhost:5001`);
  } catch (err) {
    fastify.log.error(err);
    process.exit(1);
  }
};

start();
