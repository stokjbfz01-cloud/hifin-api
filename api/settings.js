
export default function handler(req, res) {
  if (req.method !== "GET") {
    return res.status(405).json({
      success: false,
      message: "Method not allowed"
    });
  }

  const whatsappUrl =
    "https://whatsapp.com/channel/0029VbCCbN9AojYwc7gebK3D";

  return res.status(200).json({
    success: true,
    settings: {
      whatsapp_url: whatsappUrl,
      download_url: whatsappUrl,
      telegram_url: "",

      force_below: "",
      force_update: "0",
      force_versions: "",

      latest_version: "5.2",

      maintenance: "0",
      maintenance_versions: "1.0",

      notice: "",
      promo_dialog: "1"
    }
  });
}
