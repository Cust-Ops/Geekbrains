import telebot
import ConfigBish
bot = telebot.TeleBot(ConfigBish.tokenTelBot)
keyboard1 = telebot.types.ReplyKeyboardMarkup(True, True)
keyboard1.row('привет', 'тест1', 'и что же ты такое?', 'как меня зовут?')

@bot.message_handler(commands=['start'])
def start_message(message):
    bot.send_message(message.from_user.id, 'Привет,если хочешь узнать что я такое, то используй клавиатуру.', reply_markup=keyboard1)
    
@bot.message_handler(content_types=['text'])
def text_messages(message):

    if message.text.lower() == "привет":
        bot.send_message(message.from_user.id,"Привет, это тестовый бот, не стоит его использовать, Тварь.")
    elif message.text.lower() == "как меня зовут?":
        bot.send_message(message.from_user.id, f"Твое имя {message.from_user.first_name}, не стоит недооценивать меня. Ты по сравнению со мной пиздюк одноклеточный.")
    elif message.text.lower() == "и что же ты такое?":
        bot.send_message(message.from_user.id, "Да я и сам не знаю.")
    elif message.text.lower() == "тест1":
        bot.send_message(message.from_user.id, "Воображения тебе не занимать конечно.")
    else:
        bot.send_message(message.from_user.id,"Я не знаю такой команды, попробуй что нибудь еще!")

bot.infinity_polling()