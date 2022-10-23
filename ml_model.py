import os
import random
from pathlib import Path
import json

import keras.utils
import tensorflow as tf
import tensorflow_ranking as tfr

train_data = []
train_res = []

for f in os.listdir('data/train'):
    data = json.loads(open('data/train/' + f).read())
    train_data.append([x/100 for x in data['ans']])
    ls = [data['res']/100]
    train_res.append(ls)

n = len(train_data[0])  # number of questions in the survey

model = tf.keras.Sequential([
    tf.keras.layers.Dense(128, activation='relu', input_dim=n),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(1, activation='softmax')
])

model.compile(optimizer='adam',
              loss='categorical_crossentropy',
              metrics=['accuracy'])

model.fit(train_data, train_res, epochs=300)

test_data = []

for f in os.listdir('data/test'):
    test_data.append([x/100 for x in json.loads(open('data/test/' + f).read())])


for ls in model.predict(test_data):
    print(ls[0]*100)