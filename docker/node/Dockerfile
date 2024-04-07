FROM node:16 AS deps
WORKDIR /node
COPY ./app/package*.json ./
RUN npm i

FROM node:16 as builder
WORKDIR /node
COPY ./app/package*.json ./
RUN npm i
COPY ./app ./
RUN npm run build

FROM node:16
WORKDIR /node
COPY --from=deps /node/node_modules ./node_modules
COPY --from=builder /node/package.json ./package.json
EXPOSE 3000
CMD [ "npm", "run", "dev" ]
